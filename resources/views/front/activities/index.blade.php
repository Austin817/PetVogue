@extends('layouts.jun-template')

@section('css')
<style>
    .recent-p {
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

    <!-- 共用 page title -->
    <section class="page-title">
        <div class="container">
            <div class="page-title-content">
                <h2 class="section-title">近期活動</h2>
            </div>
        </div>
    </section>
    <!-- 共用 page title -->

    <section class="section-sm recent-activity">
        <div class="container">
            <div class="recent-activity-content">
                <h2 class="block-title">近期活動列表</h2>
                <ul class="recent-list">
                    @foreach ( $activityDetail as $activity)
                    <li>
                        <div class="recent-pic">
                            <img src="{{asset($activity->img)}}">
                            <a class="join-act" href="/activities/content/{{$activity->id}}">
                                <span>參加活動</span>
                                <span><i class="far fa-arrow-alt-circle-right"></i></span>
                            </a>
                        </div>
                        <div class="recent-txt">
                            <h2>{{$activity->title}}</h2>
                            <p class="act-date">
                                <span>活動日期</span>
                                <span>{{$activity->date}}</span>
                            </p>
                            <!-- 字數最大極限64字，包含標點符號 -->
                            <p>
                                <div class="recent-p">
                                    {{$activity->text}}
                                </div>
                            </p>
                            <!-- 字數最大極限64字，包含標點符號 -->
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="page-btn-group">
                    <span class="page-btn">1</span>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('js')
@endsection