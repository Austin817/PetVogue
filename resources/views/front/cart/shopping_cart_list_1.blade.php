@extends('layouts.front_template')
@section('title')
購物車
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">

    <style>
        .cargo-check .cargo-check-content .cargo-amount li span {
            width: 80px;
        }

        .cargo-check .cargo-check-content .move-btns .pet-btn:first-of-type {
            background-color: rgb(230, 207, 177);
        }
    </style>
@endsection



@section('main')
<main>
    <section class="section-sm section-lg cargo-check">
        <div class="container">
            <div class="cargo-check-content">
                <h2>1/3 購物車</h2>
                <h3>調整購買物品</h3>
                <div class="cargo-adjustment">
                    <h2 class="section-title">購物清單</h2>
                    <ul class="cargo-list">
                        <!-- 塞資料這邊塞 li做foreach -->
                        @foreach ($cartCollection as $product)
                        <li class="cargo-item">
                            <div class="cargo-pics">
                                <div class="pic">
                                    <img src="{{asset($product->attributes->img)}}" alt="商品圖片" title="商品圖片">
                                </div>
                                <div class="pic-txt-pc">
                                    <h3 class="cargo-name">{{$product->name}}</h3>
                                </div>
                            </div>
                            <div class="cargo-calc-group">
                                <div class="pic-txt-m">
                                    <h3 class="cargo-name">{{$product->name}}</h3>
                                </div>
                                <div class="unit-price-gruop">
                                    <span>單價 $</span>
                                    <span class="unit-price">{{$product->price}}</span>
                                </div>
                                <div class="cargo-calc">
                                    <button class="minus">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input class="quantity" data-id="{{$product->id}}" type="number" value="{{$product->quantity}}">
                                    <button class="plus">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div>
                                    <span>單計 $</span>
                                    <span class="unit-total" data-price="{{$product->price}}">{{$product->price * $product->quantity}}</span>
                                </div>
                            </div>
                            <div class="del-btn" data-id="{{$product->id}}"><i class="far fa-trash-alt"></i></div>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="cargo-amount">
                        <!-- 帶資料這邊帶 -->
                        <li>
                            <span>數量</span>
                            <span class="quan-total"></span>
                        </li>
                        <li>
                            <span>小計</span>
                            <span class="subtotal"></span>
                        </li>
                        <li>
                            <span>運費</span>
                            <span class="shipping"></span>
                        </li>
                        <li>
                            <span>總計</span>
                            <span class="calc-total"></span>
                        </li>
                        <!--  -->
                    </ul>
                    <div class="move-btns">
                        <a class="pet-btn" href="/shop">返回購物</a>
                        <a class="pet-btn" href="/shopping_cart/information_2">下一步</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection



@section('js')
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>




    <script>

        window.addEventListener('load',ShoppingCartCalc());


        var minusBtns = document.querySelectorAll('.minus');
        var plusBtns = document.querySelectorAll('.plus');
        var qtyInputs = document.querySelectorAll('.quantity');
        var deleteBtns = document.querySelectorAll('.del-btn');


        qtyInputs.forEach(function (qtyInput) {
            calcProductPrice(qtyInput);
        });


        qtyInputs.forEach(function (qtyInput) {
            qtyInput.addEventListener('change',function () {
                var qty = this.value;
                shoppingCartUpdate(this,this,qty)
            });
        });
        

        plusBtns.forEach(function (plusBtn) {
            plusBtn.addEventListener('click',function () {
                // this.previousElementSibling
                // 取得當前元素前面的元素，在此處也就是取得input
                
                var input = this.previousElementSibling;
                var qty = Number(input.value) + 1;

                shoppingCartUpdate(this,input,qty);

            });
        });

        minusBtns.forEach(function (minusBtn) {
            minusBtn.addEventListener('click',function () {
                // this.nextElementSibling
                // 取得當前元素後面的元素，在此處也就是取得input
                var input = this.nextElementSibling;
                
                var qty = Number(input.value) <= 1 ? 1 : Number(input.value) - 1;
                
                shoppingCartUpdate(this,input,qty);

            });
        });

        deleteBtns.forEach(function (deleteBtn) {
            deleteBtn.addEventListener('click',function () {
                var formData = new FormData();
                deleteBtnElement = this;
                formData.append('_token','{{ csrf_token() }}');
                formData.append('productId',this.getAttribute('data-id'));
                fetch('/shopping_cart/delete',{
                    'method':'POST',
                    'body': formData
                }).then(function (response) {
                    return response.text();
                }).then(function (data) {
                    if(data == 'success'){
                        var productArea = deleteBtnElement.parentElement;
                        productArea.remove();
                        ShoppingCartCalc();
                    }
                });
            });
        });



        function calcProductPrice(element) {
            // 觸發事件的元素的父層
            var controlArea = element.parentElement;
            var input = controlArea.querySelector('.quantity');
            var price = controlArea.nextElementSibling.querySelector('.unit-total');
            var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
            price.innerText = newPrice;
        }


        function shoppingCartUpdate(element,input,qty) {
            var productId = input.getAttribute('data-id');
            var formData = new FormData();
            formData.append('_token','{{ csrf_token() }}');
            formData.append('productId',productId);
            formData.append('qty',qty);

            fetch('/shopping_cart/update',{
                'method':'POST',
                'body':formData
            }).then(function (response) {
                return response.text();
            }).then(function (data) {
                input.value = Number(data);
                calcProductPrice(element);
                ShoppingCartCalc();
            });
        }



        function ShoppingCartCalc() {
            var totalQty = 0;
            var subPrice = 0;
            var shipmentPrice = 60;
            var totalPrice = 0;

            var qtyInputs = document.querySelectorAll('.quantity');
            qtyInputs.forEach(function (qtyInput) {
                totalQty += Number(qtyInput.value);

                var price = qtyInput.parentElement.nextElementSibling.lastElementChild.getAttribute('data-price');
                subPrice += price * qtyInput.value;
            });

            document.querySelector('.quan-total').innerText = totalQty.toLocaleString();
            document.querySelector('.subtotal').innerText = subPrice.toLocaleString();

            if(subPrice > 1000){
                shipmentPrice = 0;
            }

            document.querySelector('.shipping').innerText = shipmentPrice.toLocaleString();


            totalPrice = subPrice + shipmentPrice;

            document.querySelector('.calc-total').innerText = totalPrice.toLocaleString();

        }


    </script>
@endsection

