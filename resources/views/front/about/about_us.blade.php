@extends('layouts.front_template')
@section('title')
關於我
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
@endsection



@section('main')
    <main>
        <!-- 關於我 banner -->
        <section class="about-banner">
            <div class="container-full">
                <div class="about-banner-content">
                    <h2 class="block-title">關於我宣言</h2>
                    <div class="about-banner-pic">
                        {{-- <img class="about-banner-pic-pc" src="https://picsum.photos/1440/450/?random=93"> --}}
                        <img class="about-banner-pic-pc" style="object-fit: cover;" width="1440" height="500"  src="https://www-ws.gov.taipei/001/Upload/411/relpic/10162/8267424/53ec27d0-7a60-43a6-a1af-2612b73f2f8b.jpg">

                        <img class="about-banner-pic-m" src="https://picsum.photos/1440/800/?random=123">
                    </div>
                    <p class="about-banner-txt">
                        <span>毛孩一生都陪伴我們</span>
                        <span>讓我們成為牠的家人</span>
                        <span>善待並給他們一個家</span>
                        <span>請多用領養代替購買</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- 成立宗旨 -->
        <section class="section-sm section-lg about-tenet">
            <div class="container">
                <div class="about-tenet-content">
                    <h2 class="section-title">成立宗旨</h2>
                    <p>
                        「毛孩日記」（PetVogue）成立於2020年，是一非營利、非政府的民間組織。我們每年訂定明確、務實的階段任務，堅定原則，朝著最終目標前進。我們關心台灣流浪犬貓的困境，並且希望從問題的根源解決人與犬貓的衝突，透過溫柔、堅定的力量「為牠們發聲」。我們最終的目標是：「有一天，街頭不再有受苦受難的生命。」
                    </p>
                    <p>「
                        毛孩日記」兩年來持續關懷全台灣超過120個私人弱勢貓狗收容園區，仿效人類食物銀行的概念，以每月定期捐助飼料的模式，舒緩各弱勢貓狗園區的困境。
                    </p>
                    <p>
                        除了定期捐助飼料滿足貓狗每日的基本需求之外，「毛孩日記」也發現許多私人的弱勢貓狗園區，收容環境不佳，有的甚至連遮風避雨的基本建設都難達成，所以我們也陸續挑選部分園區，進行軟硬體設施的修繕與優化工作。同時也提供平台鼓勵民眾領養犬貓，「毛孩日記」去年（2020年）開始和各界攜手合作，讓無數毛小孩回歸人類家庭：
                        <span>1. 與中途動物醫院合作，共送養36隻。</span>
                        <span>2. 「一起認養吧」與民間企業合作，送養37隻。</span>
                        <span>
                            3.如果民眾交通不便或居住地點偏遠，還貼心地提供「送愛到家」服務，以專車將領養犬貓送到民眾家裡，共送養46隻。
                        </span>
                    </p>
                </div>
            </div>
        </section>



        <!-- 活動資訊 -->
        <section class="section-sm section-lg about-info">
            <div class="container">
                <div class="about-info-content">
                    <h2 class="block-title">活動資訊</h2>
                    <ul class="about-info-list">
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                            <div class="info-list-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info-list-txt">
                                <h3>參加活動</h3>
                                <p>
                                    <span>我們會去尋找各地浪浪</span>
                                    <span>協助TNR、餵食、送養</span>
                                    <span>並宣導友善動物的觀念</span>
                                </p>
                                <a href="###">按我參加</a>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                            <div class="info-list-icon">
                                <i class="fas fa-paw"></i>
                            </div>
                            <div class="info-list-txt">
                                <h3>認養寵物</h3>
                                <p>
                                    <span>在街頭流浪的浪浪們</span>
                                    <span>需要各位的友愛關懷</span>
                                    <span>給他們一個溫暖的家</span>
                                </p>
                                <a href="###">按我認養</a>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                            <div class="info-list-icon">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <div class="info-list-txt">
                                <h3>認養須知</h3>
                                <p>
                                    <span>盡我們所能的善待毛孩</span>
                                    <span>我們整理一些飼養資訊</span>
                                    <span>提供給需要的毛孩家長</span>
                                </p>
                                <a href="###">查看須知</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 捐款滿版 -->
        <section class="section-sm about-donate-banner">
            <div class="container-full">
                <div class="about-donate-banner-content">
                    <div class="donate-banner-pic-pc">
                        <img src="https://picsum.photos/1440/300/?random=923">
                    </div>
                    <div class="donate-banner-pic-m">
                        <img src="https://picsum.photos/1440/800/?random=923">
                    </div>
                    <div class="donate-banner-txt">
                        <h2>愛心捐款</h2>
                        <p>
                            我們觀察到許多善心人士建立貓狗家園，但浪浪的數量眾多，希望蒐集大家的愛心，採購飼料分送需要的單位，讓各園區的浪浪三餐能夠溫飽。
                        </p>
                        <a href="###">立即捐款</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 未來展望 -->
        <section class="section-sm section-lg about-future-plan">
            <div class="container">
                <div class="about-future-plan-content">
                    <h2 class="section-title">未來展望</h2>
                    <p>
                        近年來，台灣公立貓狗收容園區實施「零安樂死」政策，雖然看似好消息，卻也衍生許多問題；如收容所爆滿，收容品質下降等等，都令許多動保人士相當憂心。也因為公立收容所量能飽和，許多貓狗只能委由私人貓狗園區收容，無疑讓資源本已潰乏的私人貓狗園區雪上加霜。這些弱勢毛孩子的命運乖舛，更需要「PET Vogue 毛孩日誌」與社會各界伸出援手。
                    </p>
                    <p>
                        為了讓極度有限的資源幫助更多的受難貓狗，「PET Vogue 毛孩日誌」團隊不但隨時評估個別受助園區的狀況，也持續不斷尋找隱藏在台灣各角落的弱勢對象，將它們加入受助者的名單中，讓更多可憐貓狗早日走出苦難陰影。
                    </p>
                    <p>
                        也因為如此，資源的需求有增無減；「PET Vogue 毛孩日誌」邀請贊同此理念的社會大眾，伸出援手，共同加入幫助這群弱勢毛孩子的行列。
                    </p>
                </div>
            </div>
        </section>

    </main>
@endsection

   


@section('js')
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>
@endsection
