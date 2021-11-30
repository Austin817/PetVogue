@extends('layouts.front_template')
@section('title')
    收容所領養
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
                <h2 class="section-title">收容所領養</h2>
            </div>
        </div>
    </section>
    <!-- 共用 page title -->

    <section class="section-sm section-lg adopt-banner">
        <div class="container">
            <div class="adopt-banner-content">
                <h2 class="block-title">領養標語</h2>
                <div class="banner-pic">
                    <img src="{{asset('img/adopt-we.png')}}">
                </div>
                <p class="banner-txt">
                    <span>收容所的動物們都在等待一份愛，等待你給牠溫暖的家。</span>
                    <span>我們提供平台讓你在此找尋你命定的萌寵，帶收容所可愛的動物們回家。只要你年滿年滿20歲，就有機會讓牠們陪伴你的人生，一起寫下難忘的回憶。</span>
                    <span>※免費領養，犬貓皆實施植入晶片寵物登記及注射狂犬病疫苗。</span>
                    <span>※平台僅提供資訊，請自行連絡或前往該收容所領養。</span>
                </p>
            </div>
        </div>
    </section>

    <section class="section-sm section-lg adopt-animal">
        <div class="container">
            <div class="adopt-animal-content">
                <h2 class="section-title">把我帶回家</h2>
                <ul class="adopt-list">
                    @for ($i = 0; $i < 40; $i++) 
                        @php $adopt=$adopts[$i]; $sex="性別" ; 
                        if ($adopt["animal_sex"]=="F") { $sex="女" ; } 
                        else { $sex="男" ; } 
                        $city=[ '2'=>
                        '台北市','3'=>'新北市','4'=>'基隆市','5'=>'宜蘭縣',
                        '6'=>'桃園縣','7'=>'新竹縣','8'=>'新竹市','9'=>'苗栗縣',
                        '10'=>'臺中市','11'=>'彰化縣','12'=>'南投縣','13'=>'雲林縣',
                        '14'=>'嘉義縣','15'=>'嘉義市','16'=>'臺南市','17'=>'高雄市',
                        '18'=>'屏東縣','19'=>'花蓮縣','20'=>'臺東縣','21'=>'澎湖縣',
                        '22'=>'金門縣','23'=>'連江縣',];
                        @endphp
                    <li>
                        <a href="https://asms.coa.gov.tw/Amlapp/App/AnnounceList.aspx?Id={{$adopt["animal_id"]}}&AcceptNum={{$adopt["animal_subid"]}}&PageType=Adopt">
                            <div class="serial-number">
                                <span>收容編號：</span>
                                <span class="animal-number">{{$adopt["animal_subid"]}}</span>
                            </div>
                            <div class="animal-pic">
                                <img src="{{$adopt["album_file"]}}">
                            </div>
                            <div class="animal-txt">
                                <h3>我是{{$adopt["animal_kind"]}}孩子</h3>
                                <p>
                                    <span class="animail-gender">我是{{$sex}}生</span>
                                    <span>來自:{{$city[$adopt["animal_area_pkid"]]}}</span>
                                </p>
                                <p class="animal-location">我在{{$adopt["animal_place"]}}</p>
                            </div>
                        </a>
                    </li>
                    @endfor
                <div class="page-btn-group">
                    <span class="page-btn">1</span>
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