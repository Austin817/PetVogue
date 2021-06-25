@extends('layouts.front_template')
@section('title')
捐款$捐贈
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css')}}"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pet-vogue.min.css')}}">
@endsection



@section('main')
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
                    <img src="https://images.pexels.com/photos/1904105/pexels-photo-1904105.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    <img src="https://images.pexels.com/photos/1904105/pexels-photo-1904105.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                </div>
                <div class="donnate-text text">
                    <h2 class="section-title">您的捐款，有無窮的希望!</h2>
                    <p>
                        「毛孩日記」負責把關，確保您的每一份愛心都不會浪費，我們會盡力用最合理的價格，使浪浪獲得最好的醫療服務、飼料。有您的捐款，才可以讓流浪動物無後顧之憂，即時幫助到無法為自己權益發聲的浪浪！
                    </p>
                    <a class="pet-btn" href="{{ asset('donate/cash') }}">我要捐款</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm section-lg donate-support donate-item">
        <div class="container">
            <div class="donate-support-content">
                <div class="donate-support-pic">
                    <img src="https://img.wreadit.com/member/150/blogId/balimantw/147445/article_cover/147445-ef276b5b971ed3c8103d0e3efdd1028a.jpg">
                    <img src="https://img.wreadit.com/member/150/blogId/balimantw/147445/article_cover/147445-ef276b5b971ed3c8103d0e3efdd1028a.jpg">
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
                    <img src="https://images.pexels.com/photos/1904103/pexels-photo-1904103.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    <img src="https://images.pexels.com/photos/1904103/pexels-photo-1904103.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
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
                            <input type="text" class="form-control" id="" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">電話</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">物資種類</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" name="type" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">數量/單位</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" name="number" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary sweetalert2" data-swal-toast-template='#my-template'>送出</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('js')
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous')}}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous')}}"></script>
    <script src="{{ asset('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
    <script src="{{ asset('js/sweetalert2.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/ee6524aae5.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pet-vogue-jquery.js')}}"></script>
    <script src="{{ asset('js/all.js')}}"></script>
@endsection