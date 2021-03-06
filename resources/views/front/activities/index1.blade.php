<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>近期活動 - PET Vogue 毛孩日誌</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('/css/pet-vogue.min.css')}}">
</head>

<body class="body">

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
                        <img src="./pic/logo.svg" alt="PET Vogue Logo" title="PET Vogue Logo">
                    </a>
                </h1>
                <div class="user-icon-m">
                    <a href="shopping-cart-step-1.html">
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
                                    <a href="product-cat-solid-food.html">貓皇飼料</a>
                                </li>
                                <li>
                                    <a href="product-cat-can.html">貓皇罐罐</a>
                                </li>
                                <li>
                                    <a href="product-cat-litter.html">貓皇貓砂</a>
                                </li>
                                <li>
                                    <a href="product-dog-solid-food.html">狗勾飼料</a>
                                </li>
                                <li>
                                    <a href="product-dog-can.html">狗勾罐罐</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>
                                <a href="donate-support.html">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <a href="shopping-cart-step-1.html">
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
                            <h3 class="list-title only-title">
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
                                    <a href="product-cat-solid-food.html">貓皇飼料</a>
                                </li>
                                <li>
                                    <a href="product-cat-can.html">貓皇罐罐</a>
                                </li>
                                <li>
                                    <a href="product-cat-litter.html">貓皇貓砂</a>
                                </li>
                                <li>
                                    <a href="product-dog-solid-food.html">狗勾飼料</a>
                                </li>
                                <li>
                                    <a href="product-dog-can.html">狗勾罐罐</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="list-title only-title">
                                <a href="donate-support.html">愛心捐款</a>
                            </h3>
                        </li>
                        <li>
                            <h3 class="list-title only-title">
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
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                        <li>
                            <div class="recent-pic">
                                <img src="https://picsum.photos/500/250/?random=1">
                                <a class="join-act" href="activity-apply.html">
                                    <span>參加活動</span>
                                    <span><i class="far fa-arrow-alt-circle-right"></i></span>
                                </a>
                            </div>
                            <div class="recent-txt">
                                <h2>活動標題在這裡</h2>
                                <p class="act-date">
                                    <span>活動日期</span>
                                    <span class="date-start">2021.06.17</span>
                                    <span> ~ </span>
                                    <span class="date-end">2021.06.28</span>
                                </p>
                                <p class="limit-p">
                                    然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。然後也要殺手吸引大聲建議保密一股睡覺回憶，孩子收藏本頁是我，科技進攻法律凱文而在液晶，停止停止停止停止停止停止停止停止停止停止。
                                </p>
                                <!-- 字數最大極限64字，包含標點符號 -->
                            </div>
                        </li>
                    </ul>
                    <div class="page-btn-group">
                        <span class="page-btn">1</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">
                    <a href="index.html">PET Vogue 毛孩日記
                        <img src="./pic/logo.svg" alt="Footer Logo">
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
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="https://kit.fontawesome.com/ee6524aae5.js" crossorigin="anonymous"></script>
    <script src="{{asset('/js/pet-vogue-jquery.js')}}"></script>
    <script src="{{asset('/js/all.js')}}"></script>
</body>

</html>
