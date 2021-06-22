@extends('layouts.front_template')
@section('title')
寵物商城
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
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
                        <a href="###">全部商品</a>
                    </li>
                    <li>
                        <a href="###">貓皇飼料</a>
                    </li>
                    <li>
                        <a href="###">貓皇罐罐</a>
                    </li>
                    <li>
                        <a href="###">貓皇貓砂</a>
                    </li>
                    <li>
                        <a href="###">狗勾飼料</a>
                    </li>
                    <li>
                        <a href="###">狗勾罐罐</a>
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
                <img src="https://i.shgcdn.com/48313f74-248e-4af3-a792-377353206ce6/-/format/auto/-/preview/3000x3000/-/quality/lighter/" alt="特價商品圖" title="特價商品圖">
                {{-- <img src="./pic/all-product-banner.jpg" alt="特價商品圖" title="特價商品圖"> --}}
            </div>
        </div>
    </section>

    <section class="section-sm product-list-group">
        <div class="container">
            <div class="product-list-group-content">
                <h2 class="section-title">嚴選商品</h2>
                <ul class="product-list">
                    <li>
                        <a class="product-item" href="/shop/detail">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                        <a class="product-item" href="product-content-cat.html">
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
                <div class="page-btn-group">
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
@endsection


