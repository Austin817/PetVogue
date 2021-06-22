@extends('layouts.front_template')
@section('title')
領養 & 送養
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css')}}" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
@endsection



@section('main')
<main>

    <!-- 共用 page title -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-content">
                <h2 class="section-title">把我帶回家</h2>
            </div>
        </div>
    </section>
    <!-- 共用 page title -->

    <section class="section-sm section-lg pet-house">
        <div class="container">
            <div class="pet-house-content">
                <div class="house-pic">
                    <img class="house-pic-pc" src="https://picsum.photos/550/350/?random=432">
                    <img class="house-pic-m" src="https://picsum.photos/550/300/?random=432">
                </div>
                <div class="pet-house-text text">
                    <h2 class="section-title">收容所</h2>
                    <p>
                        <span>收容所的動物們都在等待一份愛，等待你給牠溫暖的家。</span>
                        <span>
                            我們提供平台讓你在此找尋你命定的萌寵，帶收容所可愛的動物們回家。只要你年滿年滿20歲，就有機會讓牠們陪伴你的人生，一起寫下難忘的回憶。
                        </span>
                        <span>※免費領養，犬貓皆實施植入晶片寵物登記及注射狂犬病疫苗。</span>
                    </p>
                    <a class="pet-btn pet-btn-pc" href="###">收容所領養</a>
                </div>
                <a class="pet-btn pet-btn-m" href="###">收容所領養</a>
            </div>
        </div>
    </section>


    <section class="section-sm section-lg pet-house">
        <div class="container">
            <div class="pet-house-content">
                <div class="house-pic">
                    <img class="house-pic-pc" src="https://picsum.photos/550/350/?random=432">
                    <img class="house-pic-m" src="https://picsum.photos/550/300/?random=432">
                </div>
                <div class="pet-house-text text">
                    <h2 class="section-title">飼主送領養</h2>
                    <p>
                        <span>你家有貓咪、狗狗或其它的寵物要送人嗎?</span>
                        <span>這裡提供送領養寵物的管道!你可以在刊載送養訊息。</span>
                        <span>本送養/領養資料,僅公告3個月,若動物資料須刪修下架,請與我們聯繫。</span>
                        <span>※免費領養，禁止與送養人有金錢往來，任何商業及買賣之行為恐違反動物保護法，切勿以身試法，以免受罰。</span>
                    </p>
                    <div class="btn-group">
                        <a class="pet-btn pet-btn-pc" href="###">我要送養</a>
                        <a class="pet-btn pet-btn-pc" href="###">我要領養</a>
                    </div>
                </div>
                <div class="btn-group">
                    <a class="pet-btn pet-btn-m" href="###">我要送養</a>
                    <a class="pet-btn pet-btn-m" href="###">我要領養</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection




@section('js')
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/sweetalert2.js"></script> --}}
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>
@endsection