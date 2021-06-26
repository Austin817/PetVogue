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
    <a href="/admin/house/create" class="btn btn-primary">新增首頁動物之家</a>
    <hr>
    <table id="houseTable" class="">
        <thead>
            <tr>
                <th>顯示幾個頁面(sort=1)</th>
                <th>名稱</th>
                <th>圖片</th>
                <th>排序(1最前)</th>
                <th>編輯刪除按鈕</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($houseData as $house)
            <tr>
                <td>{{$house->number}}</td>
                <td>{{$house->name}}</td>
                <td><img src="{{$house->img}}"style="width:100%;"></td>
                <td>{{$house->sort}}</td>
                <td><a href="/admin/house/{{$house->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$house->id}}" action="/admin/house/{{$house->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$house->id}}">刪除</button>
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
        if(confirm('是否要刪除這個動物之家?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
{{-- <script>
    $(function () {
        $("#houseTable").DataTable({
            searching: true,    //關閉filter功能
            columnDefs: [{
                targets: [6],
                orderable: false,
            }]
        });
    });
</script> --}}
@endsection