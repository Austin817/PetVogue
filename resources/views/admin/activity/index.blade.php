@extends('layouts.app')

@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
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
    <a href="/admin/activity/create" class="btn btn-primary">新增活動</a>
    <hr>
    <table id="activityTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>活動標題</th>
                <th>活動日期</th>
                <th>可參加人數</th>
                <th>活動費用</th>
                <th>活動圖片</th>
                <th>編輯刪除按鈕</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activityData as $activity)
            <tr>
                <td>{{$activity->title}}</td>
                <td>{{$activity->date}}</td>
                <td>{{$activity->people}}</td>
                <td >{{$activity->price}}</td>
                <td><img src="{{$activity->img}}"style="max-width:200px;"></td>
                <td><a href="/admin/activity/{{$activity->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$activity->id}}" action="/admin/activity/{{$activity->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$activity->id}}">刪除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    var delBtns = document.querySelectorAll('.delete-btn');
    delBtns.forEach(function (btn) {
    btn.addEventListener('click',function () {
        if(confirm('是否要刪除這場活動?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
<script>
    $(function () {
        $("#activityTable").DataTable({
            searching: true,    //關閉filter功能
            columnDefs: [{
                targets: [6],
                orderable: false,
            }]
        });
    });
</script>
@endsection