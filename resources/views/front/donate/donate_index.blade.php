<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>愛心捐款 & 物資捐贈 - PET Vogue 毛孩日誌</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/pet-vogue.css">
</head>

<body>

    <!-- 全頁面共用 -->
    <div class="loading" id="loading">
        <div class="paw-ani">
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
            <span><i class="fas fa-paw"></i></span>
        </div>
        <div class="progress" id="progress">0%</div>
    </div>
    
    <input type="checkbox" name="mobile-menu" id="menu-ctrl">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1>
                    <a href="index.html">PET Vogue 毛孩日記
                        <img src="/img/logo.svg" alt="PET Vogue Logo" title="PET Vogue Logo" class="logo">
                    </a>
                </h1>
                <div class="user-icon-m">
                    <a href="###">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="###">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
                <label class="menu-ham" for="menu-ctrl">mobile menu</label>
                <nav>
                    <h2 class="block-title">導覽列</h2>
                    <!-- pc menu -->
                    <ul class="main-nav-pc">
                        <li>
                            <h3>
                                <a href="all-articles.html">最新文章</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="article-pet-life.html">寵物生活</a>
                                </li>
                                <li>
                                    <a href="article-pet-food.html">寵物飲食</a>
                                </li>
                                <li>
                                    <a href="article-pet-environment.html">寵物環境</a>
                                </li>
                                <li>
                                    <a href="article-pet-health.html">寵物健康</a>
                                </li>
                                <li>
                                    <a href="atricle-pet-law.html">寵物法規</a>
                                </li>
                                <li>
                                    <a href="article-others.html">其他相關</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="activity.html">活動專區</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="recent-activity.html">志工聚會活動</a>
                                </li>
                                <li>
                                    <a href="activity.html#feeding">餵食浪貓地圖</a>
                                </li>
                                <li>
                                    <a href="activity.html#report">誘捕救援說明</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="pet-house.html">送領養相關</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="pet-house.html">領養與送養</a>
                                </li>
                                <li>
                                    <a href="index.html#index-half-way">中途之家</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="about_us.html">關於我</a>
                            </h3>
                        <li>
                            <h3>
                                <a href="all-products.html">寵物商城</a>
                            </h3>
                            <ul class="sub-nav-pc">
                                <li>
                                    <a href="###">貓皇飼料</a>
                                </li>
                                <li>
                                    <a href="###">貓皇罐罐</a>
                                </li>
                                <li>
                                    <a href="###">貓皇貓砂</a>
                                </li>
                                <li>
                                    <a href="###">狗勾飼料</a>
                                </li>
                                <li>
                                    <a href="###">狗勾罐罐</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="donate-support.html">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <a href="###">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <!-- 登入前 -->
                        <li>
                            <a href="###"><i class="fas fa-user"></i></a>
                        </li>
                        <!-- 登入後 -->
                        <!-- <li>
                                <h3 class="user-name"></h2>
                                <ul class="sub-nav">
                                    <li>回饋</li>
                                    <li>登出</li>
                                </ul>
                            </li> -->
                    </ul>
                    <!-- pc menu -->
    
                    <!-- mobile menu -->
                    <ul class="main-nav-mobile">
                        <li>
                            <h3 class="list-title">
                                <a href="index.html">首頁</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class="list-title">
                                <span>最新文章</span><i class="fas fa-chevron-down"></i>
                            </h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="all-articles.html">全部文章</a>
                                </li>
                                <li>
                                    <a href="article-pet-life.html">寵物生活</a>
                                </li>
                                <li>
                                    <a href="article-pet-food.html">寵物飲食</a>
                                </li>
                                <li>
                                    <a href="article-pet-environment.html">寵物環境</a>
                                </li>
                                <li>
                                    <a href="article-pet-health.html">寵物健康</a>
                                </li>
                                <li>
                                    <a href="atricle-pet-law.html">寵物法規</a>
                                </li>
                                <li>
                                    <a href="article-others.html">其他相關</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>活動專區</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="activity.html">全部活動項目</a>
                                </li>
                                <li>
                                    <a href="recent-activity.html">志工聚會活動</a>
                                </li>
                                <li>
                                    <a href="activity.html#feeding">餵食浪貓地圖</a>
                                </li>
                                <li>
                                    <a href="activity.html#report">誘捕救援說明</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>送領養相關</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="pet-house.html">領養與送養</a>
                                </li>
                                <li>
                                    <a href="#index-half-way">中途之家</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title"><span>寵物商城</span><i class="fas fa-chevron-down"></i></h3>
                            <ul class="sub-nav">
                                <li>
                                    <a href="all-products.html">全部商品</a>
                                </li>
                                <li>
                                    <a href="###">貓皇飼料</a>
                                </li>
                                <li>
                                    <a href="###">貓皇罐罐</a>
                                </li>
                                <li>
                                    <a href="###">貓皇貓砂</a>
                                </li>
                                <li>
                                    <a href="###">狗勾飼料</a>
                                </li>
                                <li>
                                    <a href="###">狗勾罐罐</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title">
                                <a href="donate-support.html">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class="list-title">
                                <a href="about_us.html">關於我</a>
                            </h3>
                        </li>
                    </ul>
                    <div class="close-nav-m">關閉導覽列</div>
                    <!-- mobile menu -->
                </nav>
            </div>
        </div>
    </header>
    <!-- 全頁面共用 -->

    <main>

        <section class="donate-placard">
            <div class="container">
                <div class="donate-placard-content">
                    <h2 class="section-title">愛心捐款</h2>
                    <p>「毛孩日記」為幫助到無法為自己權益發聲的貓狗動物，我們以感恩的心珍惜您的每一分捐款，並將妥善運用在: 
                        <span>1.傷病及受虐貓狗的救援、醫療、節育、安置、社會化、認領養等。</span>
                        <span>2.傷病及受虐貓狗的營救器材購買及維護。</span>
                        <span>3.資助全台超過130處弱勢私人流浪貓狗收容中心，支援其飼料費與協助環境修繕優化。</span> 
                        <span>4.推廣生命教育，透過各類媒體管道提倡尊重流浪犬貓相關尊重生命觀念。</span>
                    </p>
                </div>
            </div>
        </section>


        <section class="section-sm section-lg donate-support">
            <div class="container">
                <div class="donate-support-content">
                    <div class="donate-support-pic">
                        <img src="https://picsum.photos/700/500/?random=1">
                        <img src="https://picsum.photos/700/400/?random=1">
                    </div>
                    <div class="donnate-text text">
                        <h2 class="section-title">您的捐款，有無窮的希望!</h2>
                        <p>
                            「毛孩日記」負責把關，確保您的每一份愛心都不會浪費，我們會盡力用最合理的價格，使浪浪獲得最好的醫療服務、飼料。有您的捐款，才可以讓流浪動物無後顧之憂，即時幫助到無法為自己權益發聲的浪浪！
                        </p>
                        <a class="pet-btn" href="###">我要捐款</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sm section-lg donate-support donate-item">
            <div class="container">
                <div class="donate-support-content">
                    <div class="donate-support-pic">
                        <img src="https://picsum.photos/700/500/?random=1">
                        <img src="https://picsum.photos/700/400/?random=1">
                    </div>
                    <div class="supplies-text text">
                        <h2 class="section-title">幫助浪浪物資</h2>
                        <ul>
                            <li>1. 飼料及罐頭</li>
                            <li>2. 貓狗保健食品</li>
                            <li>3. 狗貓零食</li>
                            <li>4. 狗貓滴劑、心絲從預防藥</li>
                            <li>5. 牽繩、長鏈繩、項圈、胸背袋</li>
                            <li>6. 尿布墊、尿布</li>
                            <li>以上為較大宗的需求，捐贈什麼都可以唷~~</li>
                        </ul>
                        <a class="pet-btn" href="###" data-toggle="modal" data-target="#suppliesModal">物資捐贈</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sm section-lg donate-support">
            <div class="container">
                <div class="donate-support-content">
                    <div class="donate-support-pic">
                        <img src="https://picsum.photos/700/500/?random=1">
                        <img src="https://picsum.photos/700/400/?random=1">
                    </div>
                    <div class="donate-list-text text">
                        <h2 class="section-title">捐贈查詢</h2>
                        <p>
                            您的捐款，可以幫助更多浪浪們有更好的生活環境！
                            <span>捐款可以抵稅，毛孩日記皆會開立捐款收據，並以紙本方式寄送。</span>
                            <span>捐款名冊、物資用途、金額公布，</span>
                            <span>邀您一同捐款幫助浪浪找個家。</span>
                        </p>
                        <a class="pet-btn" href="###">愛心芳名錄</a>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- madal -->
        <div class="modal" tabindex="-1" id="suppliesModal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mr-auto">物資捐贈</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">聯絡人</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">電話</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">物資種類</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">數量/單位</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary sweetalert2"
                            data-swal-toast-template='#my-template'>送出</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">
                    <a href="###">PET Vogue 毛孩日記
                        <img src="https://picsum.photos/100/50/?random=541" alt="Footer Logo">
                    </a>
                </h3>
                <ul class="footer-pet-info">
                    <li>地址：台中市南區興大路145號</li>
                    <li>電話：<a href="tel:0412345678">04 - 12345678</a></li>
                    <li>LINE：@petvogue</li>
                    <li>
                        <a href="###">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="###">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <div class="coptright">
                    &copy;數位消波塊團體專題，非營利用途
                </div>
            </div>
        </div>
    </footer>
    
    
    
    <!-- 全頁面共用 -->
    <!-- 愛心捐款 -->
    <div class="donate-us">
        <a href="donate-support.html">愛心捐款</a>
    </div>
    <!-- 回到頂端 -->
    <div class="back-top">TOP</div>
    <!-- 全頁面共用 -->



    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/sweetalert2.js"></script>
    <script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
    <script src="/js/pet-vogue-jquery.js"></script>
    <script src="/js/all.js"></script>


</body>

</html>