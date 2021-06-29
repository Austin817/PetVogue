<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>petvogue-admin</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @php
                        $role = Auth::user()->role ?? null;
                    @endphp
                    @if ($role == "admin")
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link dropdown" style="color: red">後端專區</li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">文章</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="/admin/article">文章一覽</a>
                                <a class="dropdown-item" href="/admin/article_label">文章標籤</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">活動</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                <a class="dropdown-item" href="/admin/activity">活動一覽</a>
                                <a class="dropdown-item" href="/admin/feed">餵食浪浪表單</a>
                                <a class="dropdown-item" href="/admin/feed_status">餵食浪浪表單狀態</a>
                                <a class="dropdown-item" href="/admin/rescue">救援單位</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">送領養</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown03">
                                <a class="dropdown-item" href="/admin/house">動物之家</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">商品</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="/admin/product">商品管理</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">廣告</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown06">
                                <a class="dropdown-item" href="/admin/ad">廣告</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">首頁swiper</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown06">
                                <a class="dropdown-item" href="/admin/index_swiper">首頁swiper</a>
                            </div>
                        </li>
                    </ul>
                    @elseif ($role == "user")
                    建置中...
                    @else
                    建置中...
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
