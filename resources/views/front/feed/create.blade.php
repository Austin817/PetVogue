@extends('layouts.front_template')

@section('css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
<!-- google 機器人 -->
{!! htmlScriptTagJsApi() !!}
<style>
    .feed {
        min-height: calc(100vh - 55px);
    }

    .bg-image {
        background-image: url('{{asset('upload/feed/feed.jpg')}}');
        background-size: cover;
        background-position: center;
    }

    .form-label-group {
        width: 100%;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label,
    .form-label-group>textarea {
        padding: 0px;
        height: auto;
        border-radius: 5px;
        width: 100%;
    }

    .form-label-group>label {
        display: block;
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
        padding: 5px
    }

    .cheading {
        color: black;
        font-weight: bolder;
        font-size: 36px;
        padding-bottom: 30px;
    }

    .feedbtn {
        display: flex;
        justify-content: space-between;
        width: 100%;
        font-size: 18px;
    }
</style>
@endsection

@section('main')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="feed d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="cheading mb-4">新增浪浪餵食座標</h3>
                            <form action="/admin/feed" method="POST" enctype="multipart/form-data" id='feedform'>
                                @csrf
                                <div class="form-label-group">
                                    <label for="date">餵食日期</label>
                                    <input type="date" id="date" name="date" required>
                                </div>
                                <div class="form-label-group">
                                    <label for="name">浪浪種類</label>
                                    <input type="text" id="name" name="name" placeholder="請填浪浪種類ex:貓、狗...等" required>
                                </div>
                                <div class="form-label-group">
                                    <label for="quantity">浪浪數量</label>
                                    <input type="number" step="1" min="1" max="10" id="quantity" name="quantity"
                                        required placeholder="請填浪浪數量">
                                </div>

                                <div class="form-label-group">
                                    <label for="description">浪浪外觀及狀態</label>
                                    <h2>請填寫浪浪外觀及狀態 ex:黃毛黑點浪貓感覺有點虛弱...等</h2>
                                    <textarea name="description" id="description" rows="4" required></textarea>
                                </div>

                                <div class="form-label-group">
                                    <label for="imgs">浪浪照片</label>
                                    <h2>請提供一張浪浪照片供辨識</h2>
                                    <input type="file" accept="image/*" class="form-control" id="img" name="img"
                                    required>
                                </div>

                                <div class="form-label-group">
                                    <label for="imgs">其他浪浪照片及街景照片</label>
                                    <h2>請提供其他浪浪照片及餵食地區附近街景照片讓人更容易發現浪浪</h2>
                                    <input type="file" accept="image/*" class="form-control" id="imgs" name="imgs[]"
                                        multiple required>
                                </div>

                                <div class="form-label-group">
                                    <label for="address">浪浪位置</label>
                                    <h2>請填寫詳細發現浪浪的地址ex:台中市南區興大路145號中興湖畔旁</h2>
                                    <textarea name="address" id="address" rows="4" required></textarea>
                                </div>

                                <div class="form-group" id="feed-error">
                                    {!! htmlFormSnippet() !!}
                                    @error('g-recaptcha-response')
                                    <strong class="text-danger">請勾選我不是機器人</strong>
                                    @enderror
                                </div>
                                <div class="feedbtn">
                                    <button type="submit" class="pet-btn">送出</button>
                                    <a href="/feeds"><button class="pet-btn" type="button"
                                            required>改前往浪浪餵食地圖</button></a>
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

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
<script src="{{asset('/js/pet-vogue-jquery.js')}}"></script>
<script src="{{asset('/js/pet-vogue-swiper.js')}}"></script>
<script src="{{asset('/js/all.js')}}"></script>
@endsection