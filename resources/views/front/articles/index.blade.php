@extends('layouts.jun-template')

@section('css')
<style>
    .adc {
        width: 100%;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
    }
</style>
@endsection

@section('main')
<main>
    <section class="section-all article-sort-m">
        <div class="container-full">
            <div class="article-sort-m-content">
                <div class="swiper-container article-sort-list">
                    <h2 class="block-title">文章分類 - Mobile</h2>
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="all-articles.html">全部分類</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="article-pet-life.html">寵物生活</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="article-pet-food.html">寵物飲食</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="article-pet-environment.html">寵物環境</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="article-pet-health.html">寵物健康</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="atricle-pet-law.html">寵物法規</a>
                        </li>
                        <li class="swiper-slide">
                            <a href="article-others.html">其他相關</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm section-lg all-articles">
        <div class="container">
            <div class="all-articles-content">
                <h2 class="block-title">所有文章</h2>
                <ul class="article-sort-list-pc">
                    <h3>分類</h3>
                    <li>
                        <a href="/articles">全部文章</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=1">寵物生活</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=2">寵物飲食</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=3">寵物環境</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=4">寵物健康</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=5">寵物法規</a>
                    </li>
                    <li>
                        <a href="/articles?labelId=6">其他相關</a>
                    </li>
                </ul>
                <div class="article-list-group">
                    <ul>

                        <h2 class="section-title">
                            @if ($requestid == 1)寵物生活
                            @elseif ($requestid == 2)寵物飲食
                            @elseif ($requestid == 3)寵物環境
                            @elseif ($requestid == 4)寵物健康
                            @elseif ($requestid == 5)寵物法規
                            @elseif ($requestid == 6)其他相關
                            @else
                            全部文章
                            @endif
                        </h2>

                        @foreach ( $articleDetail as $article)
                        <li>
                            <a href="/articles/content/{{$article->id}}">
                                <div class="list-pic">
                                    <img src="{{asset($article->img)}}" alt="文章圖片" title="文章圖片">
                                </div>
                                <div class="list-txt">
                                    <div class="list-date">
                                        <span>{{$article->date}}</span>
                                        <span>{{$article->articleLabel->name}}</span>
                                    </div>
                                    <h3>{{$article->title}}</h3>
                                    <div class="adc">
                                        {{$article->text}}
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <div class="page-btn-group">
                            <span class="page-btn">1</span>
                        </div>
                </div>
                <div class="article-board">
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
@endsection