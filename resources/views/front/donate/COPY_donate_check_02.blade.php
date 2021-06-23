@extends('layouts.front_template')
@section('title')
    捐款-資訊
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css') }}"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css') }}">
    <style>
        .pet-submit{
            padding: 10px 15px;
            background-color: #ffe562;
            border-radius: 5px;
            transition: .3s;
            margin-left: 20px;
        }
        .pet-submit:hover{
            transform: scale(1.2);
        }
    </style>
@endsection



@section('main')
<main>
    <main>
        <section class="section section-sm section-lg donate-check">
            <div class="container">
                <div class="donate-check-content">
                    <div class="donate-txt-area">
                        <h2>愛心捐款 | 你的好他們都知道</h2>
                        <p>
                            <span>您的捐款，給流浪動物有無窮的希望！</span>
                            <span>系統會將您的愛心善款歸入所指定關注的公益專案上,希望您能長期支持，成為毛孩日記的穩定力量，讓改變成為可能。</span>
                            <span>「毛孩日記」兩年來持續關懷全台灣超過120個私人弱勢貓狗收容園區</span>
                            <span>除了定期捐助飼料滿足貓狗每日的基本需求之外，「毛孩日記」也發現許多私人的弱勢貓狗園區，收容環境不佳，所以我們也陸續挑選部分園區，進行軟硬體設施的修繕與優化工作。</span>
                        </p>
                        <div class="donate-area-pic">
                            <img src="https://picsum.photos/630/300/?random=1" alt="捐款示意圖" title="捐款示意圖">
                        </div>
                    </div>

                    <div class="donate-check-txt">
                        <div class="check-info-title">
                            <h2>2/2 確認捐款資訊</h2>
                            <h3>確認捐贈人資訊</h3>
                        </div>
                        <ul class="check-donor-list">
                            <li>
                                <h3>捐款人姓名：</h3>
                                <p>{{$donateCollection['name']}}</p>
                            </li>
                            <li>
                                <h3>捐款金額：</h3>
                                <p>$ <span>{{$donateCollection['price']}}</span></p>
                            </li>
                            <li>
                                <h3>寄送地址：</h3>
                                <p>{{ $donateCollection['zipcode']}} &nbsp; {{$donateCollection['county']}}{{$donateCollection['district']}}{{$donateCollection['address']}}</p>
                            </li>
                        </ul>
                        
                        <div class="move-btns">
                            <a href="/donate/cash" class="pet-btn">上一步</a>
                            {{-- <button class="pet-btn" type="submit">前往付款</button> --}}
                            <form action="/donate/cash_pay" method="POST">
                                @csrf
                                
                            <button class="pet-submit" type="submit">前往付款</button>
                            </form>
                            {{-- <a href="###" class="pet-btn">前往付款</a> --}}
                        </div>

                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</main>




@endsection


@section('js')

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
<script src="{{ asset('js/pet-vogue-swiper.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>

@endsection
