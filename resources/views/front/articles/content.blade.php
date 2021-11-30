@extends('layouts.front_template')
@section('title')
    文章列表
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
@endsection
<style>
    .feature-pic>img {
            width: 100%;
            height: 40vw !important; 
            object-fit: cover; 
        }

        @media screen and (min-width: 572px) {
            .feature-pic>img {
                height: 25vw !important;
            }
        }

        @media screen and (min-width: 992px) {
            .feature-pic>img {
                height: 20vw !important;
            }
        }
</style>
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
                        <a
                            href="/articles?labelId={{$articleDetail->label_id}}">{{$articleDetail->articleLabel->name}}</a>
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
                            @for ($i = 0; $i < 3; $i++) @php $article=$articleNext[$i]; @endphp <li
                                data-aos="fade-right" data-aos-duration="1000"
                                data-aos-anchor-placement="center-bottom">
                                <a href="/articles/content/{{$article->id}}">
                                    <div class="feature-pic">
                                        <img src="{{$article->img}}" alt="推薦文章" title="文章標題">
                                    </div>
                                    <div class="feature-text">
                                        <div class="date">
                                            <span>{{$article->date}}</span>
                                            <span class="essay-tag">{{$article->articleLabel->name}}</span>
                                        </div>
                                        <h2><div style="width: 100%;
                                            overflow: hidden;
                                            display: -webkit-box;
                                            -webkit-box-orient: vertical;
                                            -webkit-line-clamp: 1;">{{$article->title}}</div></h2>
                                        <p>
                                            <div style="width: 100%;
                                            overflow: hidden;
                                            display: -webkit-box;
                                            -webkit-box-orient: vertical;
                                            -webkit-line-clamp: 1;">{{$article->text}}</div>
                                        </p>
                                    </div>
                                </a>
                                </li>
                                @endfor
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