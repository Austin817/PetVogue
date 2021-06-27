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

    .index-pet-home .pet-content .pet-home-list .pet-pic a>img,
    .product-pic>img {
        width: 100%;
        height: 40vw;
        object-fit: cover;
    }

    @media screen and (min-width: 572px) {

        .index-pet-home .pet-content .pet-home-list .pet-pic a>img,
        .product-pic>img {
            height: 20vw;
        }
    }

    @media screen and (min-width: 992px) {

        .index-pet-home .pet-content .pet-home-list .pet-pic a>img,
        .product-pic>img {
            height: 15vw;
        }
    }


    .article-pic>img {
            height: 25vw ; 
            object-fit: cover; 
        }

        @media screen and (min-width: 572px) {
            .article-pic>img {
                height: 20vw ;
            }
        }

        @media screen and (min-width: 700px) {
            .article-pic>img {
                height: 20vw ;
            }
        }

        @media screen and (min-width: 992px) {
            .article-pic>img {
                height: 8vw ;
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
                        @for ($i = 0; $i < 1; $i++) 
                        @php 
                            $indexswipers=$indexswiperData[$i]; 
                        @endphp 
                        @endfor 

                        @for ($i=0;$i < $indexswipers->number;$i++)
                        @php 
                            $indexswiper=$indexswiperData[$i];
                        @endphp
                            <div class="swiper-slide">
                                <a href="{{asset($indexswiper->website)}}"><img class="slider-pc-pic"
                                        src="{{asset($indexswiper->img1)}}" alt="Banner 圖片"></a>
                                <a href="{{asset($indexswiper->website)}}"><img class="slider-mobile-pic"
                                        src="{{asset($indexswiper->img2)}}" alt="Banner 圖片"></a>
                            </div>
                        @endfor
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
                    <a href="/articles">探索更多...</a>
                </div>
                <ul class="article-list">
                    @for ($i = 0; $i < 6; $i++) 
                    @php $article=$articleData[$i]; @endphp
                    <li>
                        <a href="/articles/content/{{$article->id}}">
                            <div class="article-pic">
                                <img class="atl-pic-m" src="{{asset($article->img)}}" alt="文章圖片" title="文章圖片">
                                <img class="atl-pic-pc" src="{{asset($article->img)}}" alt="文章圖片" title="文章圖片">
                            </div>
                            <div class="article-txt">
                                <div class="artl-date-hashtag">
                                    <span>{{$article->date}}</span>
                                    <span>{{$article->articleLabel->name}}</span>
                                </div>
                                <div style="width: 100%;
                                overflow: hidden;
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 1;">{{$article->text}}</div>
                            </div>
                        </a>
                    </li>
                    @endfor
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
                    <a href="/articles">探索更多...</a>
                </div>
                <ul class="pet-home-list">
                    @for ($i = 0; $i < 3; $i++) @php $adopt=$adopts[$i]; $sex="性別" ; if ($adopt["animal_sex"]=="F" ) {
                        $sex="女" ; } else { $sex="男" ; } $city=[ '2'=>
                        '台北市','3'=>'新北市','4'=>'基隆市','5'=>'宜蘭縣',
                        '6'=>'桃園縣','7'=>'新竹縣','8'=>'新竹市','9'=>'苗栗縣',
                        '10'=>'臺中市','11'=>'彰化縣','12'=>'南投縣','13'=>'雲林縣',
                        '14'=>'嘉義縣','15'=>'嘉義市','16'=>'臺南市','17'=>'高雄市',
                        '18'=>'屏東縣','19'=>'花蓮縣','20'=>'臺東縣','21'=>'澎湖縣',
                        '22'=>'金門縣','23'=>'連江縣',];
                        @endphp
                        <li>
                            <div class="pet-pic">
                                <a
                                    href="https://asms.coa.gov.tw/Amlapp/App/AnnounceList.aspx?Id={{$adopt["animal_id"]}}&AcceptNum={{$adopt["animal_subid"]}}&PageType=Adopt">
                                    <img src="{{asset($adopt["album_file"])}}" alt="送養照片" title="送養照片">
                                </a>
                            </div>
                            <div class="pet-txt">
                                <h3>我是{{$adopt["animal_kind"]}}孩子</h3>
                                <p>
                                    <span>我是{{$sex}}生</span>
                                </p>
                                <p>我在{{$adopt["shelter_name"]}}快來接我回家</p>
                                <a
                                    href="https://asms.coa.gov.tw/Amlapp/App/AnnounceList.aspx?Id={{$adopt["animal_id"]}}&AcceptNum={{$adopt["animal_subid"]}}&PageType=Adopt">看更多</span></a>
                            </div>
                        </li>
                        @endfor
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
                    <a href="/activities">探索更多...</a>
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
                    <div class="donate-connect-m" href="{{ asset('/donate') }}" data-aos="fade-up-right"
                        data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
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
                    <a href="/shop/all">探索更多...</a>
                </div>
                <ul class="product-list">
                    @for ($i = 0; $i < 8; $i++) 
                    @php $product=$productsData[$i]; @endphp
                    <li>
                        <a class="pdt-item" href="/shop/detail/{{$product->id}}">
                            <div class="product-pic">
                                <img src="{{asset($product->img)}}" alt="商品圖片" title="商品圖片">
                            </div>
                            <div class="product-txt">
                                <h3>{{($product->name)}}</h3>
                                <div class="product-price">
                                    <span>$</span>
                                    <span>{{($product->price)}}</span>
                                </div>
                                <div class="pdt-hashtag">
                                    <span>{{($product->linkProductType->type_name)}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endfor
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
                    @for ($i = 0; $i < 1; $i++) @php $houses=$houseData[$i]; @endphp @endfor @for ($i=0; $i < $houses->
                        number ; $i++)
                        @php $house=$houseData[$i];
                        @endphp
                        <li class="half-item">
                           
                            <h3 class="halfway-home-title">{{$house->name}}</h3>
                            <a class="half-item-pc" href="{{asset($house->website)}}">
                                <img src="{{asset($house->img)}}" alt="中途之家圖片" title="中途之家連結">
                            </a>
                            <a class="half-item-m" href="{{asset($house->website)}}">{{($house->name)}}</a>
                        </li>
                        @endfor
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection


@section('js')
<!-- <script src="./js/jquery-3.6.0.min.js"></script> -->
<script src="{{ asset('js/moment.js')}}"></script>{{-- 只是拿來做行事曆 --}}
<script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script> {{-- 只是拿來做滑頁動畫 --}}
<script src="{{ asset('js/aos.js')}}"></script> {{-- 只是拿來做出移動動畫 --}}
<script src="{{ asset('js/main.min.js')}}"></script>{{-- 只是拿來做行事曆 --}}
<script src="{{ asset('js/pet-vogue-swiper.js')}}"></script>{{-- 只是拿來做滑頁動畫 --}}
<script src="{{ asset('js/pet-vogue-calendar.js')}}"></script>{{-- 只是拿來做行事曆 --}}
<script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
<script src="{{ asset('js/all.js')}}"></script>
<script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
@endsection
