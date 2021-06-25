<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title') - Pet Vogue
        {{-- {{ config('app.name', ' - Pet Vogue') }} --}}
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.css') }}"> --}}

    @yield('css')
    <style>
        /* LIMO更動區域 */
        /* 改標籤顏色 */
        .product-list-group .product-list li .product-item .product-txt .pdt-hashtag span:nth-of-type(1) {
            background-color: #ffe562;
        }

        .index-featured-article .article-list li .article-txt .artl-date-hashtag span:nth-of-type(2) {
            background-color: #ffe562;
        }

        /* 字體修改*/
        body {
            font-weight: 390;
            background-color: white;
        }

        h1,
        h2,
        h3 {
            font-weight: 400;
        }

        .footer-content .footer-title {
            background-color: transparent;
        }

        /* 手機NAV分隔線 */
        .header {
            border-bottom: silver;
        }

        /* 手機下拉選單增加上方分隔線 */
        .header-content .main-nav-mobile {
            top: 50px;
        }

        .header-content .main-nav-mobile li:first-of-type .list-title {
            border-top: 1px solid #fa0;
        }

        /* 愛心捐款黏貼右側 */
        .donate-us a {
            border-radius: 5px 0 0 5px;
        }

        .donate-us.show-donate {
            right: 0;
        }

        /* SWIPER上推方空白 */
        .index-banner-slider .swiper-container {
            padding-top: 10px;
        }

        /* PC下拉透明背景 */
        @media screen and (min-width: 992px) {
            .header-content .main-nav-pc>li:hover .sub-nav-pc {
                box-shadow: 0px 3px 8px #5552;
            }
        }

        .header-content .close-nav-m.close-active {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .header-content .main-nav-mobile a,
        .index-half-way .half-content .half-list a {
            background-color: #fdf1b3;
            color: #000;
        }

        .header-content .main-nav-mobile li>a {
            padding-left: 30px;
        }

        .index-featured-article .article-list li {
            border: 0;
        }

        @media screen and (min-width: 992px) {
            .index-featured-article .article-content .article-list li:hover {
                box-shadow: 0 1px 5px #0005;
            }
        }

    </style>

    <link rel="shortcut icon" href="{{ asset('img/petvogue-logo.ico') }}" type="image/ico" />
    <link rel="icon" href="{{ asset('img/petvogue-logo.ico') }}" type="image/ico" />
</head>

<body>
    <div class="loading" id="loading">
        <div class="paw-ani">
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
        </div>
        <div class="progress" id="progress">0%</div>
    </div>

    <input type="checkbox" name="mobile-menu" id="menu-ctrl">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1>
                    <a href="/">PET Vogue 毛孩日記
                        <img src="{{ asset('/img/logo-08.svg') }}" alt="PET Vogue Logo" title="PET Vogue Logo">
                    </a>
                </h1>
                <div class="user-icon-m">
                    <a href="###">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="###">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
                <label class="menu-ham" for="menu-ctrl">mobile menu</label>
                <nav>
                    <h2 class="block-title">導覽列</h2>
                    <!-- pc menu -->
                    <ul class="main-nav-pc">
                        <li>
                            <h3>
                                <a href="all-articles.html">最新文章</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="article-pet-life.html">寵物生活</a>
                                </li>
                                <li>
                                    <a href="article-pet-food.html">寵物飲食</a>
                                </li>
                                <li>
                                    <a href="article-pet-environment.html">寵物環境</a>
                                </li>
                                <li>
                                    <a href="article-pet-health.html">寵物健康</a>
                                </li>
                                <li>
                                    <a href="atricle-pet-law.html">寵物法規</a>
                                </li>
                                <li>
                                    <a href="article-others.html">其他相關</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="/event">活動專區</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="recent-activity.html">志工聚會活動</a>
                                </li>
                                <li>
                                    <a href="activity.html#feeding">餵食浪貓地圖</a>
                                </li>
                                <li>
                                    <a href="activity.html#report">誘捕救援說明</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="/owner">送領養相關</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="pet-house.html">領養與送養</a>
                                </li>
                                <li>
                                    <a href="index.html#index-half-way">中途之家</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="/about">關於我</a>
                            </h3>
                        <li>
                            <h3>
                                <a href="/shop">寵物商城</a>
                            </h3>
                            <ul class="sub-nav-pc">
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
                        </li>
                        <li>
                            <h3>
                                <a href="/donate">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <a href="###">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <!-- 登入前 -->


                        <ul class="navbar-nav ml-auto">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a></a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                            登出
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                        <!-- 登入後 -->
                        <!-- <li>
                            <h3 class="user-name"></h2>
                            <ul class="sub-nav">
                                <li>回饋</li>
                                <li>登出</li>
                            </ul>
                        </li> -->
                    </ul>

                    <!-- pc menu -->

                    <!-- mobile menu -->
                    <ul class="main-nav-mobile">
                        <li>
                            <h3 class="list-title only-title">
                                <a href="/">首頁</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class="list-title">
                                <span>最新文章</span><i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="all-articles.html">全部文章</a>
                                </li>
                                <li>
                                    <a href="article-pet-life.html">寵物生活</a>
                                </li>
                                <li>
                                    <a href="article-pet-food.html">寵物飲食</a>
                                </li>
                                <li>
                                    <a href="article-pet-environment.html">寵物環境</a>
                                </li>
                                <li>
                                    <a href="article-pet-health.html">寵物健康</a>
                                </li>
                                <li>
                                    <a href="atricle-pet-law.html">寵物法規</a>
                                </li>
                                <li>
                                    <a href="article-others.html">其他相關</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>活動專區</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="activity.html">全部活動項目</a>
                                </li>
                                <li>
                                    <a href="recent-activity.html">志工聚會活動</a>
                                </li>
                                <li>
                                    <a href="activity.html#feeding">餵食浪貓地圖</a>
                                </li>
                                <li>
                                    <a href="activity.html#report">誘捕救援說明</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>送領養相關</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="/owner">領養與送養</a>
                                </li>
                                <li>
                                    <a href="#index-half-way">中途之家</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>寵物商城</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="/shop">全部商品</a>
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
                        </li>
                        <li>
                            <h3 class="list-title only-title">
                                <a href="/donate">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class="list-title only-title">
                                <a href="/about">關於我</a>
                            </h3>
                        </li>
                    </ul>
                    <div class="close-nav-m">關閉導覽列</div>
                    <!-- mobile menu -->
                </nav>
            </div>
        </div>
    </header>
    <!-- 全頁面共用 -->


    @yield('main')


    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">
                    <a href="{{ asset('/') }}">PET Vogue 毛孩日記
                        <img src="{{ asset('/img/logo-08.svg') }}" alt="Footer Logo" title="PET Vogue Logo">

                    </a>
                </h3>
                <ul class="footer-pet-info">
                    <li>地址：台中市南區興大路145號</li>
                    <li>電話：<a href="tel:0412345678">04 - 12345678</a></li>
                    <li>LINE：@petvogue</li>
                    <li>
                        <a href="###">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="###">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <div class="coptright">
                    &copy;數位消波塊團體專題，非營利用途

                </div>
            </div>
        </div>
    </footer>

    <!-- 全頁面共用 -->
    <!-- 愛心捐款 -->
    <div class="donate-us">
        <a href="{{ asset('/donate') }}"><i class="far fa-heart"></i> 愛心捐款</a>
    </div>
    <!-- 回到頂端 -->
    <div class="back-top">TOP</div>
    <!-- 全頁面共用 -->





    <script src="{{ asset('js/app.js') }}"></script>

    @if (Session::get('icon'))
        <script>
            Swal.fire({
                icon: '{{ Session::get('icon') }}',
                title: '{{ Session::get('title') }}',
                text: '{{ Session::get('text') }}',
                timer: 3500
            });
        </script>
    @endif

    @yield('js')

</body>

</html>
