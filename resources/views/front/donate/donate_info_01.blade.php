@extends('layouts.front_template')
@section('title')
    捐款-資訊
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css') }}"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css') }}">
@endsection



@section('main')
<main>
    <section class="section section-sm section-lg donate-detail">
        <div class="container">
            <div class="donate-detail-content">
                <div class="donate-detail-area">
                    <h2>愛心捐款 | 讓幫助動物成為充滿愛的日常</h2>
                    <p>
                        <span>
                            「毛孩日記」與全台多個動物醫療機構及各大飼料廠商都有合作關係，可以用最合理的價格，獲得最好的醫療服務，並購得最多的飼料，確保您的愛心發揮最大效益。
                        </span>
                        <span>
                            有您的捐款，才可以讓流浪動物無後顧之憂，幫助到無法為自己權益發聲的流浪動物！
                        </span>
                    </p>
                    <div class="donate-area-pic">
                        <img src="https://images.pexels.com/photos/3908804/pexels-photo-3908804.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="捐款示意圖" title="捐款示意圖">
                    </div>
                </div>
                <div class="donate-detail-input">
                    <form action="/donate/cash_save" method="POST">
                        @csrf
                        <div class="input-top">
                            <h2>
                                <span>1/2 捐款金額</span>
                                讓幫助動物成為充滿愛的日常
                            </h2>
                        </div>
                        <div class="input-price">

                            <div class="donate-money">
                                <h3>捐款金額</h3>
                                <select name="price" id="price" required>
                                    <option value="100">$100 - 小小支持，大大改變</option>
                                    <option value="500">$500 - 動保路上，有您真好</option>
                                    <option value="1000">$1000 - 因為有您，浪愛不斷</option>
                                    <option value="80000">$80000 - 感激涕零，恩重如山</option>
                                </select>
                            </div>

                            <div class="donor-name">
                                <label for="donor">捐贈者姓名</label>
                                <input type="text" id="donor" name="name" placeholder="王小明" required>
                            </div>
                        </div>

                        <!-- 後端帶入前端 -->
                        <div class="city-selector-set">

                            <h3>縣市<span>(收據以紙本收據寄送，請務必填寫完整地址)</span></h3>
                            <div class="allselect">

                                <div class="sel-county">
                                    <!-- 縣市選單 -->
                                    <select class="county" name="county" required></select>
                                </div>

                                <div class="sel-district">
                                    <!-- 區域選單 -->
                                    <select class="district" name="district" required></select>
                                </div>

                            </div>

                            
                             <div>
                                <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                                <input class="zipcode" name="zipcode" type="text" size="3" readonly placeholder="郵遞區號">
                              </div>

                            <div class="addres">
                                <label for="ads">街道地址</label>
                                <input type="text" name="address" id="ads" placeholder="例:興大路426號3樓" required>
                            </div>

                        </div>
                        <button class="pet-btn" type="submit">下一步</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>




@endsection


@section('js')
    {{-- 引用地址JS --}}
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>

    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>
    {{-- <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script> --}}

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js') }}"></script>
    <script src="{{ asset('js/pet-vogue-swiper.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>

@endsection
