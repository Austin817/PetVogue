@extends('layouts.front_template')
@section('title')
商品
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">


    <style>
        .small-pic {
            width: 100%;
            height: 40vw;
            object-fit: cover;
        }
        #show-pic {
            width: 100%;
            height: 35vw;
            object-fit: cover;
        }
    </style>
@endsection



@section('main')
<main>

    <!-- 商品頁面共用 -->
    <!-- 商品列表分類 mobile版 -->
    <section class="section-all product-sort-m">
        <div class="container-full">
            <div class="product-sort-content">
                <div class="swiper-container product-sort-list">
                    <h2 class="block-title">商品分類 - Mobile</h2>
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="/shop/all">全部商品</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="/shop/1">貓皇飼料</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="/shop/2">貓皇罐罐</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="/shop/3">貓皇貓砂</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="/shop/4">狗勾飼料</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="/shop/5">狗勾罐罐</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 商品列表分類 pc版 -->
    <section class="section-all product-sort-pc">
        <div class="container">
            <div class="product-sort-content">
                <h2 class="block-title">商品分類 - PC</h2>
                <ul class="sort-list">
                    <li>
                        <a href="/shop/all">全部商品</a>
                    </li>
                    <li>
                        <a href="/shop/1">貓皇飼料</a>
                    </li>
                    <li>
                        <a href="/shop/2">貓皇罐罐</a>
                    </li>
                    <li>
                        <a href="/shop/3">貓皇貓砂</a>
                    </li>
                    <li>
                        <a href="/shop/4">狗勾飼料</a>
                    </li>
                    <li>
                        <a href="/shop/5">狗勾罐罐</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 商品頁面共用 -->

    <section class="section-product product-show-off">
        <div class="container">
            <div class="product-show-off-content">
                <h2 class="block-title">商品圖片</h2>
                <!-- 圖片資料要導入兩次，PC版沒有幻燈片 -->
                <div class="product-show-off-pic">
                    <div class="main-pic">
                        <img id="show-pic" src="{{$productData->img}}" alt="商品圖片" title="商品圖片">
                    </div>
                    <div class="sub-pic-group">
                        <div class="sub-pic">
                            <img class="small-pic" src="{{$productData->img}}" alt="商品圖片" title="商品圖片">
                        </div>
                        @foreach ($productData->linkProductImg as $img)
                        <div class="sub-pic">
                            <img class="small-pic" src="{{$img->img}}" alt="商品圖片" title="商品圖片">
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- 圖片資料要導入兩次，PC版沒有幻燈片 -->

                <!-- 圖片資料要導入兩次，手機版有幻燈片 -->
                <div class="pdt-content">
                    <div class="swiper-container product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{$productData->img}}">
                            </div>
                            @foreach ($productData->linkProductImg as $img)
                            <div class="swiper-slide">
                                <img src="{{$img->img}}">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- 圖片資料要導入兩次，手機版有幻燈片 -->

                <div class="product-show-off-text">
                    <h2 class="section-title">{{$productData->name}}</h2>
                    <span class="product-tag">{{$productData->linkProductType->type_name}}</span>
                    <p>
                        {{$productData->description}}
                    </p>
                    <div class="product-price">
                        <span>數量</span>
                        <input id="qty-input" type="number" value="1">
                        <span>$&nbsp;&nbsp;{{number_format($productData->price)}}</span>
                    </div>
                    <button class="pet-btn add-cart-btn" data-id="{{$productData->id}}">加入購物車</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section product-description">
        <div class="container">
            <div class="product-description-content">
                <h2 class="section-title">商品詳情</h2>
                <div class="product-description-txt">
                    <!-- 商品描述資料塞這裡 -->
                    <!-- 內文標題限制使用 h2 或 h3 都可，css 已寫好標題左邊黃色方塊 -->
                    <h3>製作過程</h3>
                    <p>
                        「毛孩日記」與全台多個動物醫療機構及各大飼料廠商都有合作關係，可以用最合理的價格，獲得最好的醫療服務，並購得最多的飼料，確保您的愛心發揮最大效益。有您的捐款，才可以讓流浪動物無後顧之憂，幫助到無法為自己權益發聲的流浪動物！
                    </p>
                    <h3>製作過程</h3>
                    <p>
                        「毛孩日記」與全台多個動物醫療機構及各大飼料廠商都有合作關係，可以用最合理的價格，獲得最好的醫療服務，並購得最多的飼料，確保您的愛心發揮最大效益。有您的捐款，才可以讓流浪動物無後顧之憂，幫助到無法為自己權益發聲的流浪動物！
                    </p>
                    <h3>製作過程</h3>
                    <p>
                        「毛孩日記」與全台多個動物醫療機構及各大飼料廠商都有合作關係，可以用最合理的價格，獲得最好的醫療服務，並購得最多的飼料，確保您的愛心發揮最大效益。有您的捐款，才可以讓流浪動物無後顧之憂，幫助到無法為自己權益發聲的流浪動物！
                    </p>
                    <!-- 商品描述資料塞這裡 -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm section-lg product-onsale-banner">
        <div class="container-full">
            <div class="product-onsale-banner-content">
                <img class="pic-pc" src="https://picsum.photos/1440/450/?random=1" alt="商品圖片" title="商品圖片">
                <img class="pic-m" src="https://picsum.photos/1440/750/?random=1" alt="商品圖片" title="商品圖片">
            </div>
        </div>
    </section>
    <section class="section-sm section-lg feature-product">
        <div class="container">
            <div class="feature-product-content">
                <div class="section-head">
                    <h2 class="section-title">推薦商品</h2>
                    <a href="all-products.html">探索更多...</a>
                </div>
                <ul>
                    <li>
                        <a class="product-item" href="###">
                            <div class="product-pic">
                                <img src="https://picsum.photos/300/300/?random=678" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3>消波塊嚴選 | 特製香草豬後腿肉.鮮味貓貓罐頭</h3>
                                <div class="product-price">
                                    <span>$</span>
                                    <span>299</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>貓砂</span>
                                    <span>貓罐頭</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="product-item" href="###">
                            <div class="product-pic">
                                <img src="https://picsum.photos/300/300/?random=678" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3>消波塊嚴選 | 特製香草豬後腿肉.鮮味貓貓罐頭</h3>
                                <div class="product-price">
                                    <span>$</span>
                                    <span>299</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>貓砂</span>
                                    <span>貓罐頭</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="product-item" href="###">
                            <div class="product-pic">
                                <img src="https://picsum.photos/300/300/?random=678" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3>消波塊嚴選 | 特製香草豬後腿肉.鮮味貓貓罐頭</h3>
                                <div class="product-price">
                                    <span>$</span>
                                    <span>299</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>貓砂</span>
                                    <span>貓罐頭</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="product-item" href="###">
                            <div class="product-pic">
                                <img src="https://picsum.photos/300/300/?random=678" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3>消波塊嚴選 | 特製香草豬後腿肉.鮮味貓貓罐頭</h3>
                                <div class="product-price">
                                    <span>$</span>
                                    <span>299</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>貓砂</span>
                                    <span>貓罐頭</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>
@endsection



@section('js')
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/pet-vogue-swiper.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>

    <script>
        let small_pic = document.querySelectorAll('.small-pic');
        for (let i = 0; i < small_pic.length; i++){
            small_pic[i].onmouseover = function(){
                let pic_src = this.getAttribute('src');
                let show_pic = document.querySelector('#show-pic');
                show_pic.setAttribute('src', pic_src);
            }
        }
    </script>


    <script>
        document.querySelectorAll('.add-cart-btn').forEach(function (addBtn) {
          addBtn.addEventListener('click',function () {
            var productId = this.getAttribute('data-id');
            var qtyInput = document.querySelector('#qty-input');
            var quantity = qtyInput.value;
            var formData = new FormData();
            formData.append('_token','{{ csrf_token() }}');
            formData.append('productId',productId);
            formData.append('quantity',quantity);
            fetch('/shopping_cart/add',{
              method:'POST',
              body:formData
            }).then(function (response) {
              return response.text();
            }).then(function (data) {
              if(data == 'success'){
                Swal.fire({
                  icon: 'success',
                  title: '成功加入購物車!',
                  showConfirmButton: false,
                  timer: 1000
                })
              }
            });
          });
        })
      </script>
@endsection