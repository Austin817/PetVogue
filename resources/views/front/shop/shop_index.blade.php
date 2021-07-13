@extends('layouts.front_template')
@section('title')
寵物商城
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">

    <style>
        .ellipsis {
            overflow:hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .product-pic>img {
            width: 100%;
            height: 40vw;
            object-fit: cover;
        }

        @media screen and (min-width: 572px) {
            .product-pic>img {
                height: 25vw;
            }
        }

        @media screen and (min-width: 992px) {
            .product-pic>img {
                height: 20vw;
            }
        }

        .none{
            display: none;
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
                            <a href="###">全部商品</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="###">貓皇飼料</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="###">貓皇罐罐</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="###">貓皇貓砂</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="###">狗勾飼料</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="###">狗勾罐罐</a>
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
                        <a class="button-a" data-type="all" href="###">全部商品</a>
                    </li>
                    <li>
                        <a class="button-a" data-type="1"href="###">貓皇飼料</a>
                    </li>
                    <li>
                        <a class="button-a" data-type="2" href="###">貓皇罐罐</a>
                    </li>
                    <li>
                        <a class="button-a" data-type="3" href="###">貓皇貓砂</a>
                    </li>
                    <li>
                        <a class="button-a" data-type="4" href="###">狗勾飼料</a>
                    </li>
                    <li>
                        <a class="button-a" data-type="5" href="###">狗勾罐罐</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 商品頁面共用 -->

    <section class="section-sm all-product-banner">
        <div class="container-full">
            <h2 class="block-title">特價商品圖</h2>
            <div class="all-product-content">
                <img src="{{ asset('https://i.shgcdn.com/48313f74-248e-4af3-a792-377353206ce6/-/format/auto/-/preview/3000x3000/-/quality/lighter/')}}" alt="特價商品圖" title="特價商品圖">
            </div>
        </div>
    </section>

    <section class="section-sm product-list-group">
        <div class="container">
            <div class="product-list-group-content">
                <h2 class="section-title">嚴選商品</h2>
                <ul class="product-list">
                    @foreach ($productsData as $Data)
                    <li class="product-li" data-type="{{$Data->type_id}}">
                        <a class="product-item" href="/shop/detail/{{$Data->id}}">
                            <div class="product-pic">
                                <img src="{{asset($Data->img)}}" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3 class="ellipsis">{{$Data->name}}</h3>
                                <div class="product-price">
                                    <span>$</span>&nbsp;&nbsp;
                                    <span>{{number_format($Data->price)}}</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>{{$Data->linkProductType->type_name}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div id="pageBtn" data-type="{{$id}}" class="page-btn-group">
                    <span class="page-btn">1</span>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection



@section('js')
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>

    <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/pet-vogue-swiper.js') }}"></script>
    

    <script>
        window.addEventListener('load',function () {
            var id = document.querySelector('#pageBtn');
            var typeId = id.getAttribute('data-type');
            console.log(typeId);
            if(typeId!='all'){
                    // 所有商品加隱藏
                    var products = document.querySelectorAll('.product-li');
                    products.forEach(function (product) {
                        product.classList.add('none');
                    });
                    // 把符合條件的商品打開
                    var targetProducts = document.querySelectorAll('.product-li[data-type="'+typeId+'"]');
                    targetProducts.forEach(function (product) {
                        product.classList.remove('none');
                    });
                }else{
                    var allProducts = document.querySelectorAll('.product-li');
                    allProducts.forEach(function (product) {
                        product.classList.remove('none');
                    });
                } 
        });
        // 取所有按鈕
        var typeBtns = document.querySelectorAll('.button-a');
        // 每個按鈕綁監聽
        typeBtns.forEach(function (btn) {
            btn.addEventListener('click',function () {
                // 拿按下那個按鈕的類別id
                var typeId = this.getAttribute('data-type');
                if(typeId!='all'){
                    // 所有商品加隱藏
                    var products = document.querySelectorAll('.product-li');
                    products.forEach(function (product) {
                        product.classList.add('none');
                    });
                    // 把符合條件的商品打開
                    var targetProducts = document.querySelectorAll('.product-li[data-type="'+typeId+'"]');
                    targetProducts.forEach(function (product) {
                        product.classList.remove('none');
                    });
                }else{
                    var allProducts = document.querySelectorAll('.product-li');
                    allProducts.forEach(function (product) {
                        product.classList.remove('none');
                    });
                } 
            });
        });
    </script>
@endsection


