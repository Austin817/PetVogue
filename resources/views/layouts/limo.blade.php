{{-- 這裡是LIMO的template --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css') }}">
    
    <title>
        @yield('title')
        {{ config('app.name', 'Laravel') }}
    </title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body>
    <body class="body">

        <!-- 全頁面共用 -->
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
                        <a href="index.html">PET Vogue 毛孩日記
                            <img src="./pic/logo.svg" alt="PET Vogue Logo" title="PET Vogue Logo">
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
                                    <a href="activity.html">活動專區</a>
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
                                    <a href="pet-house.html">送領養相關</a>
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
                                    <a href="about_us.html">關於我</a>
                                </h3>
                            <li>
                                <h3>
                                    <a href="all-products.html">寵物商城</a>
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
                                    <a href="donate-support.html">愛心捐款</a>
                                </h3>
                            </li>
                            <li>
                                <a href="###">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <!-- 登入前 -->
                            <li>
                                <a href="###"><i class="fas fa-user"></i></a>
                            </li>
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
                                    <a href="index.html">首頁</a>
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
                                        <a href="pet-house.html">領養與送養</a>
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
                                        <a href="all-products.html">全部商品</a>
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
                                    <a href="donate-support.html">愛心捐款</a>
                                </h3>
                            </li>
                            <li>
                                <h3 class="list-title only-title">
                                    <a href="about_us.html">關於我</a>
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
    































    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- 抽屜 --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/index') }}">數位方塊</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontlist') }}">最新消息</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="{{ url('/news') }}">編輯🖍</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                功能
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index">頁面A</a>
                                <a class="dropdown-item" href="news/list">頁面B</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/01') }}">頁面01</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/02') }}">頁面02</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/03') }}">頁面03</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/realindex') }}">產品卡特</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shopping_cart/content') }}">購買檢視</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shopping_cart/list') }}">購買購物車</a>
                        </li>
                       
                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        {{-- 無登入畫面 --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" 
                                    href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>



                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @yield('main')
        </main>
    </div>
    {{-- 改動 --}}
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('js')
</body>
</html>

