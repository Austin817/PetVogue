@extends('layouts.front_template')
@section('title')
商品
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

    <section class="section-product product-show-off">
        <div class="container">
            <div class="product-show-off-content">
                <h2 class="block-title">商品圖片</h2>
                <!-- 圖片資料要導入兩次，PC版沒有幻燈片 -->
                <div class="product-show-off-pic">
                    <div class="main-pic">
                        <img src="https://picsum.photos/500/500/?random=1" alt="商品圖片" title="商品圖片">
                    </div>
                    <div class="sub-pic-group">
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=1" alt="商品圖片" title="商品圖片">
                        </div>
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=2" alt="商品圖片" title="商品圖片">
                        </div>
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=3" alt="商品圖片" title="商品圖片">
                        </div>
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=5" alt="商品圖片" title="商品圖片">
                        </div>
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=5" alt="商品圖片" title="商品圖片">
                        </div>
                        <div class="sub-pic">
                            <img src="https://picsum.photos/500/500/?random=6" alt="商品圖片" title="商品圖片">
                        </div>
                    </div>
                </div>
                <!-- 圖片資料要導入兩次，PC版沒有幻燈片 -->

                <!-- 圖片資料要導入兩次，手機版有幻燈片 -->
                <div class="pdt-content">
                    <div class="swiper-container product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=1">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=2">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=3">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=4">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=5">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://picsum.photos/500/500/?random=6">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- 圖片資料要導入兩次，手機版有幻燈片 -->

                <div class="product-show-off-text">
                    <h2 class="section-title">Tiki主食貓罐-夏日14號(紫)雞肉蛋-80g</h2>
                    <span class="product-tag">商品標籤</span>
                    <p>
                        特製狗食級醬油調味，適合特製狗食級醬油調味，適合各式大小犬種，簡單美味各式大小犬種，簡單美味。
                    </p>
                    <p>    
                        特製狗食級醬油調味，適合特製狗食級醬油調味，適合各式大小犬種，簡單美味各式大小犬種，簡單美味。
                    </p>
                    <div class="product-price">
                        <span>數量</span>
                        <input type="number" value="1">
                        <span>$1200</span>
                    </div>
                    <button class="pet-btn add-cart-btn">加入購物車</button>
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
@endsection