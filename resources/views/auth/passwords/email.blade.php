@extends('layouts.front_template')
@section('title')
重設密碼
@endsection
@section('css')
<style>
    .login {
        min-height: calc(100vh - 55px);
    }

    .bg-image {
        background-image: url('https://images.pexels.com/photos/5047566/pexels-photo-5047566.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position: center;
    }

    .btn-primary {
        font-size: 1.5rem;
        letter-spacing: 0.05rem;
        padding: 0.5rem 0.5rem;
        border-radius: 0.5rem;
        background-color: #3FA2F7;
        width: 100%;
        margin-bottom: 1rem;
    }

    .form-label-group {
        width: 100%;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: 0px;
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>label {
        display: block;
        width: 100%;
        line-height: 1.5;
        font-size: 18px;
        font-weight: bold;
        color: black;
        cursor: text;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
        padding-bottom: 10px;
    }

    .form-label-group input::placeholder {
        color: #8A9196;
    }

    .form-control {
        height: 54px;
        font-size: 16px;
    }

    .heading {
        color: #2699FB;
        font-weight: bolder;
        font-size: 36px;
        padding-bottom: 30px;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>
@endsection
@section('main')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">

                            <div class="heading">{{ __('重設密碼') }}</div>
                            <div class="body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-label-group">
                                        <label for="email" class="col-form-label text-md-left">{{ __('電子信箱') }}</label>
                                        <div>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="請輸入註冊時用的電子信箱" required
                                                autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sendmail">
                                        <div>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('發送密碼到電子信箱') }}
                                            </button>
                                        </div>
                                        <a class="" href="{{ route('login') }}">{{ __('我要登入') }}</a></div>

                                    </div>
                                </form>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')


    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js') }}"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js') }}"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('//cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>



@endsection