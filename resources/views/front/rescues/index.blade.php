@extends('layouts.front_template')
@section('title')
各縣市動物保護機關
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/pet-vogue.min.css')}}">
<style>
    .card {
        width:96%;
        margin: auto;
    }
    .cardcover{
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .btn {
        background-color: #FFE661;
    }

    .list-group-item{
        font-weight: 10px;
    }
</style>
@endsection
@section('main')
 <!-- 共用 page title -->
 <section class="page-title">
    <div class="container">
        <div class="page-title-content">
            <h2 class="section-title">各縣市動物保護機關</h2>
        </div>
    </div>
</section>
<!-- 共用 page title -->
<main>
    <div class="container">
        <div style="display:flex;flex-wrap:wrap;justify-content:center;">
            @foreach ( $rescueDetail as $rescue)
            <div class="cardcover col-xl-3 col-lg-4 col-md-4 col-sm-6 col-8  text-center">
                <div class="card border-dark">
                    <div class="card-body rounded">
                        <h5 class="card-header rounded">{{$rescue->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-left">{{$rescue->address}}</li>
                        <li class="list-group-item text-left">{{$rescue->number}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{$rescue->website}}" class="btn rounded">點我進入官方網站</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-8"></div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-8"></div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-8"></div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-8"></div>
        </div>
    </div>
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