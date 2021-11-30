@extends('layouts.front_template')
@section('title')
    浪浪餵食地圖
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<style>
    .feedmap{
        height: 55.5vh;
        width: 100%;
        position: relative;
    }
    .pet-btn {
        position: absolute;
        bottom:30%;
        right:15%;
        z-index: 99;
    }
</style>
@endsection
@section('main')
<main>
    <!-- 共用 page title -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-content">
                <h2 class="section-title">浪浪餵食地圖</h2>
            </div>
        </div>
    </section>
    <!-- 共用 page title -->
    <section class="section-sm recent-activity">
        <div class="container">
            <div class="feedmap">
                <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1cDPrPTkQOamDaeJjoXO_2HceSIPcZ1zJ"
                    width="100%" height="100%"></iframe>
            </div>
        </div>
    </section>
    <a href="/feeds/create"><button class="pet-btn" type="button">建立自己的浪浪餵食座標</button></a>
</main>
@endsection
@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
<script src="{{asset('/js/pet-vogue-jquery.js')}}"></script>
<script src="{{asset('/js/pet-vogue-swiper.js')}}"></script>
<script src="{{asset('/js/all.js')}}"></script>
@endsection