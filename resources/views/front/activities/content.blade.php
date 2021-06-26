@extends('layouts.front_template')

@section('css')
<link rel="stylesheet" href="{{asset('css/reset.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
<style>
</style>
@endsection
@section('main')
<main>

    <!-- 共用 黃色 title -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-content">
                <h2 class="section-title">選擇活動</h2>
            </div>
        </div>
    </section>
    <!-- 共用 黃色 title -->
    <section class="section-sm section-lg activities-register">
        <div class="container">
            <div class="activities-register-content">
                <h2 class="block-title">活動時間＆地點</h2>
                <div class="register-news">
                    <div class="news-date">
                        <p>{{$activity->date}}</p>
                        <span>{{$activity->timestart}} ~ {{$activity->timeend}}</span>
                    </div>
                    <div class="news-detail">
                        <div class="where">
                            <h3>活動地點</h3>
                            <p>{{$activity->address}}</p>
                        </div>
                        <div class="who">
                            <h3>活動主持人</h3>
                            <p>{{$activity->host}}</p>
                        </div>
                        <div class="num-people">
                            <h3>可報名人數</h3>
                            <p>{{$activity->people}}</p>
                        </div>
                        <div class="cost">
                            <h3>參加費用</h3>
                            <p>{{$activity->price}}</p>
                        </div>
                        <div class="register-go">
                            <a href="###" class="pet-btn">報名去 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm section-lg activities-exhaustive">
        <div class="container">
            <div class="activities-exhaustive-content">
                <div class="exhaustive-title">
                    <h2>活動內容</h2>
                </div>
                <div class="exhaustive-area" >
                    <!-- 活動資料放這裡，由於不知道要放什麼，沒寫css -->
                    <div class="pic">
                        <img src="{{asset($activity->img)}}">
                    </div>
                    <div class="txt">
                        {{$activity->text}}
                    </div>
                    <!-- 活動資料放這裡，由於不知道要放什麼，沒寫css -->
                </div>
                <div class="exhaustive-btns">
                    <a href="###" class="pet-btn"><i class="fas fa-arrow-left"></i> 回到活動列表</a>
                    <a href="###" class="pet-btn">報名去 <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
@section('js')
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
<script src="{{asset('js/pet-vogue-jquery.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
@endsection