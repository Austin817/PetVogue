@extends('layouts.front_template')

@section('css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
@endsection

@section('main')
<main>
    <section class="section-bread-crumb bread-crumb">
        <div class="container">
            <div class="bread-crumb-content">
                <ol class="bread-crumb-list">
                    <li>
                        <a href="/articles">文章列表</a>
                    </li>
                    <li>
                        <a href="/articles?labelId={{$articleDetail->label_id}}">{{$articleDetail->articleLabel->name}}</a>
                    </li>
                    <li>
                        <a href="/articles/content/{{$articleDetail->id}}">{{$articleDetail->title}}</a>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="section-article essay-environment">
        <div class="container">
            <div class="essay-content">
                <div class="essay-wrap">
                    <div class="essay-articletext">
                        <h2 class="section-title">{{$articleDetail->title}}</h2>
                        <div class="date">
                            <span>{{$articleDetail->date}}</span>
                            <span class="essay-tag">{{$articleDetail->articleLabel->name}}</span>
                        </div>
                        <div class="essay-pic">
                            <img src="{{$articleDetail->img}}">
                        </div>
                        <p class="essay-txt">
                            {{$articleDetail->text}}
                        </p>
                        文章來源：<a class="essay-origin"
                            href="{{$articleDetail->website}}">{{$articleDetail->reference}}</a>
                    </div>
                    <div class="feature-eaasy">
                        <h2 class="section-title">文章推薦</h2>
                        <ul>
                            <li data-aos="fade-right" data-aos-duration="1000"
                                data-aos-anchor-placement="center-bottom">
                                <a href="###">
                                    <div class="feature-pic">
                                        <img src="{{$articleDetail->img}}" alt="推薦文章" title="文章標題">
                                    </div>
                                    <div class="feature-text">
                                        <div class="date">
                                            <span>2021-06-15</span>
                                            <span class="essay-tag">Hashtag</span>
                                        </div>
                                        <h2>文章標題</h2>
                                        <p>
                                            文件回答首頁註冊時間還會相當高效情人品牌，就算要是對你對面，政治這一首先你怎麼動物作出，近期都不專門形勢女性臺灣民眾公主計算機桌面。
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000"
                                data-aos-anchor-placement="center-bottom">
                                <a href="###">
                                    <div class="feature-pic">
                                        <img src="{{$articleDetail->img}}" alt="推薦文章" title="文章標題">
                                    </div>
                                    <div class="feature-text">
                                        <div class="date">
                                            <span>2021-06-15</span>
                                            <span class="essay-tag">Hashtag</span>
                                        </div>
                                        <h2>文章標題</h2>
                                        <p>
                                            文件回答首頁註冊時間還會相當高效情人品牌，就算要是對你對面，政治這一首先你怎麼動物作出，近期都不專門形勢女性臺灣民眾公主計算機桌面。
                                        </p>
                                    </div>
                                </a>

                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000"
                                data-aos-anchor-placement="center-bottom">
                                <a href="###">
                                    <div class="feature-pic">
                                        <img src="{{$articleDetail->img}}" alt="推薦文章" title="文章標題">
                                    </div>
                                    <div class="feature-text">
                                        <div class="date">
                                            <span>2021-06-15</span>
                                            <span class="essay-tag">Hashtag</span>
                                        </div>
                                        <h2>文章標題</h2>
                                        <p>
                                            文件回答首頁註冊時間還會相當高效情人品牌，就算要是對你對面，政治這一首先你怎麼動物作出，近期都不專門形勢女性臺灣民眾公主計算機桌面。
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="essay-billing">
                    <ul>
                        <h2 class="block-title">廣告</h2>
                        @foreach ( $adData as $ad)
                        <li>
                            <a href="{{$ad->website}}">
                                <img src="{{asset($ad->img)}}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
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