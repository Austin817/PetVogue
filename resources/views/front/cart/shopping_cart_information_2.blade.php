@extends('layouts.front_template')
@section('title')
購物車
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">

    <style>
        .move-btns {
            margin-top: 50px;
            margin-left: auto;
            padding: 0;
            margin-bottom: -30px;
            margin-right: 5px
        }
        .title-h3{
            margin-top: 30px;
            margin-left: 20px
        }
        .pet-submit{
            padding: 10px 15px;
            background-color: #ffe562;
            border-radius: 5px;
            transition: .3s;
            margin-left: 20px;
            border: none
        }
        .pet-submit:hover{
            transform: scale(1.2);
        }

        @media screen and (min-width: 768px){}
        .user-info .user-info-content {
        max-width: 920px;
        }

        .user-info .user-info-content .move-btns .pet-btn:first-of-type {
            background-color: rgb(230, 207, 177);
        }
    </style>
@endsection



@section('main')
<main>
    <section class="section-sm section-lg user-info">
        <div class="container">
            <div class="user-info-content">
                <h2>2/3 購物車</h2>
                <h3>填選運送詳細資料</h3>
                <form action="/shopping_cart/checkout_3" method="POST" class="user-form-list">
                    @csrf
                    <!-- 帶資料這邊帶 -->
                    <div class="info-group">
                        <label for="receiver">收件人</label>
                        <input class="receiver-name" type="text" name="name" id="receiver" placeholder="輸入姓名" required>
                    </div>
                    <div class="info-group">
                        <label for="phone">聯絡電話</label>
                        <input class="receiver-phone" type="tel" name="phone" id="phone" placeholder="0988-888-888" required>
                    </div>
                    <div class="info-group">
                        <label for="mail">聯絡信箱</label>
                        <input class="receiver-mail" type="email" name="email" id="mail" placeholder="888@petVogue.com" required>
                    </div>
                    <!-- 後端帶入前端 -->
                    <div class="city-selector-set">
                        <label for="">收件地址</label>
                        <div class="allselect">
                            <div class="sel-county">
                                <!-- 縣市選單 -->
                                <select class="county" name="county" required>
                                    {{-- <option value="八八市">八八市</option> --}}
                                    <!-- 測試用記得刪掉 -->
                                </select>
                            </div>
                            <div class="sel-district">
                                <!-- 區域選單 -->
                                <select class="district" name="district" required>
                                    {{-- <option value="八八區">八八區</option> --}}
                                    <!-- 測試用記得刪掉 -->
                                </select>
                            </div>
                            <input type="text" size="3" class="zipcode" id="zipcode" name="zipcode" style="display: none" required>
                            <input type="text" name="address" id="" placeholder="輸入街道地址" required>
                        </div>
                    </div>
                    <h3 class="title-h3">*目前僅提供線上刷卡支付及宅配服務</h3>
                    <div class="move-btns">
                        <a class="pet-btn" href="/shopping_cart/list_1">上一步</a>
                        <button class="pet-submit" type="submit">下一步</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection



@section('js')
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>
    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>

    {{-- <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script> --}}
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>
@endsection

