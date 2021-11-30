@extends('layouts.front_template')
@section('title')
    活動專區
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/reset.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
<style>
</style>
@endsection
@section('main')
<main>
    <!-- 共用 page title -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-content">
                <h2 class="section-title">活動專區</h2>
            </div>
        </div>
    </section>
    <!-- 共用 page title -->

    <section class="section-sm section-lg activity" id="activity">
        <div class="container">
            <div class="activity-content">
                <div class="section-head">
                    <h2 class="section-title">聚會活動</h2>
                    <a href="/activities">更多活動...</a>
                </div>
                <ul class="activity-list">
                    @for ($i = 0; $i < 3; $i++) 
                    @php
                         $activity = $activityDetail[$i];
                    @endphp
                    <li>
                        <div class="pic">
                            <div style="width: 100%;
                            height: 300px;
                            background-image:url({{asset($activity->img)}});
                            background-size: cover;
                            background-position: center;
                            "></div>
                        </div>
                        <div class="activities-text text">
                            <h3>{{$activity->title}}</h3>
                            <p class="limit-p">
                                {{$activity->text}}
                            </p>
                            <a class="pet-btn" href="/activities/content/{{$activity->id}}">參加活動</a>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </section>

    <section class="section-sm section-lg feeding" id="feeding">
        <div class="container">
            <div class="feeding-content">
                <h2 class="section-title">浪浪餵食紀錄</h2>
                <div class="feeding-wrap">
                    <div class="pic">
                        <img class="pic-xl" src="{{asset('upload/feed/feed.jpg')}}">
                        <img class="pic-pc" src="{{asset('upload/feed/feed.jpg')}}">
                        <img class="pic-m" src="{{asset('upload/feed/feed.jpg')}}">
                    </div>
                    <div class="feeding-text text">
                        <h3>餵食浪浪這樣做</h3>
                        <p>
                            <span>1.餵食地點需隱蔽，呼喚時要輕聲不要大吵大叫。</span>
                            <span>2.將環境影響破壞減到最低，餵過之後清理餵食地點。</span>
                            <span>3.餵食時不要和流浪貓狗親密。不要撫摸、抱它們。</span>
                            <span>4.請不要和他人爭執理論，不用愛心綁架他人。</span>
                            <span>5.「毛孩日記」僅提供會員上傳餵食紀錄做為參考資訊，如願意貢獻愛心，可依餵食紀錄及上述做法餵食住家附近流浪動物。</span>
                        </p>
                        <div class="feeding-btns">
                            <a class="pet-btn" href="/feeds">浪浪餵食地圖</a>
                            <a class="pet-btn" href="/feeds/create">新增浪浪餵食座標</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm section-lg report" id="report">
        <div class="container">
            <div class="report-content">
                <h2 class="section-title">誘捕救援通報</h2>
                <div class="report-wrap">
                    <div class="pic">
                        <img class="pic-xl" src="{{asset('upload/feed/rescues.jpg')}}">
                        <img class="pic-pc" src="{{asset('upload/feed/rescues.jpg')}}">
                        <img class="pic-m" src="{{asset('upload/feed/rescues.jpg')}}">
                    </div>
                    <div class="report-text text">
                        <h3>遇到浪浪這樣做</h3>
                        <p>
                            <span>1.判斷浪浪需要什麼幫助，例如受傷？在馬路上危險？</span>
                            <span>2.走失或受傷的浪浪，若是可以接近就以套繩固定帶往醫院，若無法接近可聯繫志工或動保處人員協助。</span>
                            <span>3.自行領養後可在「毛孩日記」上發起領養資訊，例如浪浪照片、地點、狀況等等，藉此找到飼主或新主人。</span>
                            <span>4.若在馬路上看到浪浪，最好通知政府單位協助較為安全，以下為整理的全省動物保護單位資訊。</span>
                            <span>5.如您遇到浪浪想幫助它時卻不知道該如何處理時，不妨點擊下方按鈕依所在縣市動物保護機關進行查詢。</span>
                        </p>
                        <a class="pet-btn" href="/rescues">各縣市動物保護機關</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('js')
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
<script src="{{asset('js/pet-vogue-jquery.js')}}"></script>
<script src="{{asset('/js/all.js')}}"></script>
@endsection