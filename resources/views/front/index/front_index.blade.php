@extends('layouts.front_template')
@section('title')
    首頁
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css') }}">
    <style>
        @media screen and (min-width: 992px) {
            .index-pet-home h2 {
                color: white
            }

            .index-pet-home {
                background-color: black;
                background-image: url(https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            }
        }

        .index-pet-home .pet-content .pet-home-list .pet-pic a>img,.product-pic>img {
            width: 100%;
            height: 40vw;
            object-fit: cover;
        }

        @media screen and (min-width: 572px) {
            .index-pet-home .pet-content .pet-home-list .pet-pic a>img,.product-pic>img{
                height: 20vw;
            }
        }

        @media screen and (min-width: 992px) {
            .index-pet-home .pet-content .pet-home-list .pet-pic a>img,.product-pic>img {
                height: 15vw;
            }
        }


    </style>
@endsection

@section('main')

    <main>
        <!-- slider -->
        <section class="index-banner-slider">
            <div class="container-full">
                <div class="slider-content">
                    <h2 class="block-title">廣告幻燈片</h2>
                    <!-- Swiper -->
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="slider-pc-pic" src="{{ asset('img/index-dog.png') }}" alt="Banner 圖片">
                                <img class="slider-mobile-pic" src="{{ asset('img/index-dog-m.png') }}"
                                    alt="Banner 圖片">
                            </div>
                            <div class="swiper-slide">
                                <img class="slider-pc-pic" src="{{ asset('img/index-sleep.png') }}" alt="Banner 圖片">
                                <img class="slider-mobile-pic" src="{{ asset('img/index-sleep-m.png') }}"
                                    alt="Banner 圖片">
                            </div>
                            <div class="swiper-slide">
                                <img class="slider-pc-pic" src="{{ asset('img/index-train.png') }}" alt="Banner 圖片">
                                <img class="slider-mobile-pic" src="{{ asset('img/index-train-m.png') }}"
                                    alt="Banner 圖片">
                            </div>
                            <div class="swiper-slide">
                                <img class="slider-pc-pic" src="{{ asset('img/index-stayby.png') }}" alt="Banner 圖片">
                                <img class="slider-mobile-pic" src="{{ asset('img/index-stayby-m.png') }}"
                                    alt="Banner 圖片">
                            </div>
                            <div class="swiper-slide">
                                <img class="slider-pc-pic" src="{{ asset('img/index-save.png') }}" alt="Banner 圖片">
                                <img class="slider-mobile-pic" src="{{ asset('img/index-save-m.png') }}"
                                    alt="Banner 圖片">
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-color"></div>
                        <div class="swiper-button-prev swiper-color"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- article -->
        <section class="section-sm section-lg index-featured-article">
            <div class="container">
                <div class="article-content">
                    <div class="section-head">
                        <h2 class="section-title">精選文章</h2>
                        <a href="all-articles.html">探索更多...</a>
                    </div>
                    <ul class="article-list">
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=93" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=93" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=94" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=94" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=95" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=95" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=96" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=96" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=97" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=97" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                <div class="article-pic">
                                    <img class="atl-pic-m" src="https://picsum.photos/300/300/?random=98" alt="文章圖片"
                                        title="文章圖片">
                                    <img class="atl-pic-pc" src="https://picsum.photos/300/150/?random=98" alt="文章圖片"
                                        title="文章圖片">
                                </div>
                                <div class="article-txt">
                                    <div class="artl-date-hashtag">
                                        <span>2021.06.01</span>
                                        <span>貓</span>
                                        <span>食品</span>
                                    </div>
                                    <p>操作系統聯合，搭配網際網路學校求職都在一下子，欄目獨立。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 帶我回家 -->
        <section class="section-sm section-lg index-pet-home">
            <div class="container">
                <div class="pet-content">
                    <div class="section-head">
                        <h2 class="section-title">帶我回家</h2>
                        <a href="###">探索更多...</a>
                    </div>
                    <ul class="pet-home-list">
                        <li>
                            <div class="pet-pic">
                                <a href="###">
                                    <img src="https://images.pexels.com/photos/2623968/pexels-photo-2623968.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        alt="送養照片" title="送養照片">
                                </a>
                            </div>
                            <div class="pet-txt">
                                <h3>優質愛笑西施犬</h3>
                                <p>
                                    <span>男生</span>
                                    <span>1歲</span>
                                </p>
                                <p>所在地：台中市</p>
                                <a href="###">看更多</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="pet-pic">
                                <a href="###">
                                    <img src="https://images.pexels.com/photos/3090875/pexels-photo-3090875.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="送養照片" title="送養照片">
                                </a>
                            </div>
                            <div class="pet-txt">
                                <h3>俐落尖耳短毛帥吉</h3>
                                <p>
                                    <span>男生</span>
                                    <span>1歲</span>
                                </p>
                                <p>所在地：台南市</p>
                                <a href="###">看更多</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="pet-pic">
                                <a href="###">
                                    <img src="https://images.pexels.com/photos/6563627/pexels-photo-6563627.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="送養照片" title="送養照片">
                                </a>
                            </div>
                            <div class="pet-txt">
                                <h3>蓬鬆感十足藍眼波絲貓</h3>
                                <p>
                                    <span>男生</span>
                                    <span>1歲</span>
                                </p>
                                <p>所在地：台南市</p>
                                <a href="###">看更多</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 活動行事曆 -->
        <section class="section-sm section-lg index-pet-calendar">
            <div class="container">
                <div class="calendar-content">
                    <div class="section-head">
                        <h2 class="section-title">活動行事曆</h2>
                        <a href="###">探索更多...</a>
                    </div>
                    <div id="calendar-lg"></div>
                    <div id="calendar-md"></div>
                    <div id="calendar-sm"></div>
                    <div id="calendar-xs"></div>
                </div>
            </div>
        </section>

        <!-- 愛心捐款 -->
        <section class="section-sm section-lg index-pet-donate">
            <div class="container">
                <div class="donate-content">
                    <h2 class="block-title">愛心捐款</h2>
                    <!-- mobile version -->
                    <div class="donate-banner-m">
                        <div class="donate-connect-m" href="{{ asset('/donate') }}" data-aos="fade-up-right" data-aos-duration="1000"
                            data-aos-anchor-placement="center-bottom">
                            <a>協助浪浪吃飽飽，睡好好</a>
                        </div>
                        <div class="donate-pic-m" data-aos="fade-down-left" data-aos-duration="1000"
                            data-aos-anchor-placement="center-bottom">
                            <img src="{{ asset('img/donate-touch-m.png') }}" alt="捐款廣告圖" title="捐款圖片">
                        </div>
                    </div>
                    <!-- pc version -->
                    <div class="donate-banner-pc">
                        <div class="donate-pic-pc">
                            <img src="{{ asset('img/donate-touch.png') }}" alt="捐款廣告圖" title="捐款圖片">
                        </div>
                        <div class="donate-connect-pc" data-aos="zoom-in-down" data-aos-duration="2000"
                            data-aos-anchor-placement="bottom-bottom">
                            <a href="{{ asset('/donate') }}">協助浪浪吃飽飽，睡好好<span>請點我</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 精選商品 -->
        <section class="section-sm section-lg index-pet-product">
            <div class="container">
                <div class="product-content">
                    <div class="section-head">
                        <h2 class="section-title">精選商品</h2>
                        <a href="all-products.html">探索更多...</a>
                    </div>
                    <ul class="product-list">
                        <li>
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=677" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=679" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=567" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=568" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=569" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=1" alt="商品圖片" title="商品圖片">
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
                            <a class="pdt-item" href="###">
                                <div class="product-pic">
                                    <img src="https://picsum.photos/300/300/?random=1" alt="商品圖片" title="商品圖片">
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

        <!-- 中途之家 -->
        <section class="index-half-way" id="index-half-way">
            <div class="container">
                <div class="half-content">
                    <h2 class="half-title-m">
                        <span>中途之家列表</span><i class="fas fa-chevron-down"></i>
                    </h2>
                    <h2 class="section-title">中途之家</h2>
                    <ul class="half-list">
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=18" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=91" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=31" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=134" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=1231" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=841" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=183" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                        <li class="half-item">
                            <h3 class="halfway-home-title">動物關懷協會</h3>
                            <a class="half-item-pc" href="###">
                                <img src="https://picsum.photos/100/100/?random=681" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="###">中途之家</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection


@section('js')
    <!-- <script src="./js/jquery-3.6.0.min.js"></script> -->
    <script src="{{ asset('js/moment.js') }}"></script>{{-- 只是拿來做行事曆 --}}
    <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js') }}"></script>{{-- 只是拿來做滑頁動畫 --}}
    <script src="{{ asset('js/aos.js') }}"></script> {{-- 只是拿來做出移動動畫 --}}
    <script src="{{ asset('js/main.min.js') }}"></script>{{-- 只是拿來做行事曆 --}}
    <script src="{{ asset('js/pet-vogue-swiper.js') }}"></script>{{-- 只是拿來做滑頁動畫 --}}
    <script src="{{ asset('js/pet-vogue-calendar.js') }}"></script>{{-- 只是拿來做行事曆 --}}
    <script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
@endsection
