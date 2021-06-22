@extends('layouts.front_template')

@section('title')
登入
@endsection
@section('css')
<style>

  .login {
    min-height: calc(100vh - 55px);
  }

  .bg-image {
    background-image: url('https://images.pexels.com/photos/5472520/pexels-photo-5472520.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    background-size: cover;
    background-position: center;
  }



  .btn-login {
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

  .cheading {
    color: #2699FB;
    font-weight: bolder;
    font-size: 36px;
    padding-bottom: 30px;
  }

  .forgetpasswordandsignup {
    display: flex;
    justify-content: space-between;
    width: 100%;
    font-size: 18px;
  }

  .form-control{
    height: 54px;
    font-size: 16px;
  }

  .custom-control-label{
    font-size: 18px;
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
              <h3 class="cheading mb-4">登入</h3>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-label-group">
                  <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('電子信箱') }}</label>
                  <div>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" placeholder="請輸入電子信箱" value="{{ old('email') }}" required autocomplete="email"
                      autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-label-group">
                  <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('密碼') }}</label>
                  <div>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" placeholder="請輸入密碼" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">{{ __('記住我') }}</label>
                </div>


                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold "
                  type="submit">{{ __('登入') }}</button>

                <div class="forgetpasswordandsignup">
                  <div class="">
                    <a class="" href="{{ route('password.request') }}">{{ __('忘記密碼？') }}</a></div>
                  <div class="">
                    <a class="" href="{{ route('register') }}">{{ __('我要註冊') }}</a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection