{{-- 這裡是AUTH的天婦羅 --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
    @yield('title')
    {{ config('app.name', 'Laravel') }}</title>
    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}
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

