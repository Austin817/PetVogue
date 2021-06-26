@extends('layouts.app')

@section('css')
{{-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
<style>
    td,th {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 10px;
    }
</style>
@endsection
@section('main')
<div class="container">
    <a href="/admin/index_swiper/create" class="btn btn-primary">新增首頁swiper</a>
    <hr>
    <table id="indexswiperTable" class="">
        <thead>
            <tr>
                <th>顯示幾個頁面(sort=1)</th>
                <th>標題</th>
                <th>網站大圖</th>
                <th>網站小圖</th>
                <th>排序(1最前)</th>
                <th>編輯刪除按鈕</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($indexswiperData as $indexswiper)
            <tr>
                <td>{{$indexswiper->number}}</td>
                <td>{{$indexswiper->title}}</td>
                <td><img src="{{$indexswiper->img1}}"style="width:100%;"></td>
                <td><img src="{{$indexswiper->img2}}"style="width:100%;"></td>
                <td>{{$indexswiper->sort}}</td>
                <td><a href="/admin/index_swiper/{{$indexswiper->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$indexswiper->id}}" action="/admin/index_swiper/{{$indexswiper->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$indexswiper->id}}">刪除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
<script>
    var delBtns = document.querySelectorAll('.delete-btn');
    delBtns.forEach(function (btn) {
    btn.addEventListener('click',function () {
        if(confirm('是否要刪除這條swiper?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
{{-- <script>
    $(function () {
        $("#indexswiperTable").DataTable({
            searching: true,    //關閉filter功能
            columnDefs: [{
                targets: [6],
                orderable: false,
            }]
        });
    });
</script> --}}
@endsection