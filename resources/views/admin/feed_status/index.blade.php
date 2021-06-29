@extends('layouts.app')

@section('css')
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
    <a href="/admin/feed_status/create " class="btn btn-primary">新增表單進度</a>
    <hr>
    <table id="feedstatusTable">
        <thead>
            <tr>
                <th>id</th>
                <th>進度名稱</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedstatusData as $feedstatus)
            <tr>
                <td>{{$feedstatus->id}}</td>
                <td>{{$feedstatus->name}}</td>
                <td><a href="/admin/feed_status/{{$feedstatus->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$feedstatus->id}}" action="/admin/feed_status/{{$feedstatus->id}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$feedstatus->id}}">刪除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
document.querySelectorAll('.delete-btn').forEach(function (btn) {
    btn.addEventListener('click',function () {
        var id=this.getAttribute('data-id');
        if(confirm('是否要刪除這個進度?')){
            document.querySelector(id).submit();
        }
    });
})
</script>
@endsection