@extends('layouts.front_template')
@section('title')
購物車
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">

    <style>
        @media screen and (min-width: 992px){
            .final-check .final-check-content {
                max-width: 920px;
            }
        }

        .final-check .final-check-content .cargo-amount li span {
            width: 80px;
        }

        .final-check .final-check-content .move-btns .pet-btn:first-of-type {
            background-color: rgb(230, 207, 177);
        }
    </style>
@endsection



@section('main')
<main>
    <section class="section-sm section-lg final-check">
        <div class="container">
            <div class="final-check-content">
                <h2>3/3 購物車</h2>
                <h3>確認購物詳細資料</h3>
                <div class="final-check-info">
                    <div class="check-cargo">
                        <h2 class="section-title">購物清單</h2>
                        <ul class="cargo-list">
                            <!-- 塞資料這邊塞 li做foreach -->
                            @php
                                $cartCollection = \Cart::getContent()->sortBy('id');
                            @endphp
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
                                <div class="cargo-txt">
                                    <div class="pic-txt-m">
                                        <h3 class="cargo-name"></h3>
                                    </div>
                                    <div class="cargo-quantity-group">
                                        <span>x</span>
                                        <span class="cargo-quantity">{{$product->quantity}}</span>
                                    </div>
                                    <div class="cargo-price-group">
                                        <span>$</span>
                                        <span class="cargo-price">{{number_format($product->price * $product->quantity)}}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="check-shipping">
                        <h2 class="section-title">運送資訊</h2>
                        <ul>
                            <!-- 帶資料這邊帶 -->
                            @php
                                $orderData = Session::all();
                                $informationData = $orderData['information_save'];
                            @endphp
                            <li>
                                <span>收件人：</span>
                                <span class="receiver-name">{{$informationData['name']}}</span>
                            </li>
                            <li>
                                <span>聯絡信箱：</span>
                                <span class="receiver-mail">{{$informationData['email']}}</span>
                            </li>
                            <li>
                                <span>聯絡手機：</span>
                                <span class="receiver-phone">{{$informationData['phone']}}</span>
                            </li>
                            <li>
                                <span>收件地址：</span>
                                <span>{{$informationData['county'].$informationData['district'].$informationData['address']}}</span>
                            </li>
                            <!--  -->
                        </ul>
                    </div>
                    <ul class="cargo-amount">
                        <!-- 帶資料這邊帶 -->
                        @php
                            $stringSubTotal = \Cart::getSubTotal();
                            $shipment = \Cart::getSubTotal() > 1000 ? 0 : 60 ;
                            $subTotal=intval($stringSubTotal);
                        @endphp
                        <li>
                            <span>數量</span>
                            <span class="quan-total">{{\Cart::getTotalQuantity()}}</span>
                        </li>
                        <li>
                            <span>小計</span>
                            <span class="subtotal">$ {{number_format($subTotal)}}</span>
                        </li>
                        <li>
                            <span>運費</span>
                            <span class="shipping">$ {{number_format($shipment)}}</span>
                        </li>
                        <li>
                            <span>總計</span>
                            <span class="calc-total">$ {{number_format($subTotal + $shipment)}}</span>
                        </li>
                        <!--  -->
                    </ul>
                    <div class="move-btns">
                        <a class="pet-btn" href="/shopping_cart/information_2">上一步</a>
                        <a class="pet-btn" href="/shopping_cart/send_order">去結帳</a>
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
        
    </script>
@endsection

