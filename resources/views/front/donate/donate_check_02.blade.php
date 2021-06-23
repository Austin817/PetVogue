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

        .check-donor-list .d-flex{
            justify-content: space-between;
        }
        .donate-detail-area h2{
        font-weight:400;
    }.donate-area-pic{
        padding-top:20px ;
    }
    .text-r{
        text-align: right;
    }
    .pet-btn{
        background-color: transparent;
        border: 0;
    }
    .input-price{
        margin-bottom: 220px;
    }
    </style>
@endsection



@section('main')

<main>
    <section class="section section-sm section-lg donate-detail">
        <div class="container">
            <div class="donate-detail-content">
                <div class="donate-detail-area">
                    <h2>愛心捐款 | 讓幫助動物成為日常</h2>
                    <p>
                        <span>
                            毛孩日記」兩年來持續關懷全台灣超過120個私人弱勢貓狗收容園區
                        </span>
                        <span>
                            您的捐款，給流浪動物有無窮的希望！且針對貓狗收容環境不佳園區，進行軟硬體設施的修繕與優化工作。
                        </span>
                    </p>
                    <div class="donate-area-pic">
                        {{-- <img src="https://picsum.photos/630/300/?random=1" alt="捐款示意圖" title="捐款示意圖"> --}}

                        <img src="https://images.pexels.com/photos/3908804/pexels-photo-3908804.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="捐款示意圖" title="捐款示意圖">
                    </div>
                </div>
                <div class="donate-detail-input">

                        <div class="input-top">
                            <h2>
                                <span>2/2 確認捐款資訊</span>
                                確認捐贈人資訊
                            </h2>
                        </div>
                        <div class="input-price">
                            <ul class="check-donor-list">
                                <li class="d-flex">
                                    <h3>捐款人姓名：</h3>
                                    <p>{{$donateCollection['name']}}</p>
                                </li>
                                <li class="d-flex">
                                    <h3>捐款金額：</h3>
                                    <p>$ <span>{{$donateCollection['price']}}</span></p>
                                </li>
                                <li class="d-flex">
                                    <h3>寄送地址：</h3>
                                    <div class="address-area">
                                        <p class="text-r">{{ $donateCollection['zipcode']}} &nbsp; {{$donateCollection['county']}}{{$donateCollection['district']}}<br>{{$donateCollection['address']}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                       
                        <form action="/donate/cash_pay" method="POST">
                            @csrf
                        <div class="move-btns d-flex">
                            
                        <button href="/donate/cash" class="pet-btn" type="button">上一步</button>
                        <button class="pet-submit" type="submit">前往付款</button>

                        </div>
                        </form>
                        {{-- <a href="###" class="pet-btn">前往付款</a> --}}
                </div>
            </div>
        </div>
    </section>
</main>





@endsection


@section('js')

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
<script src="{{ asset('js/pet-vogue-swiper.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>

@endsection
