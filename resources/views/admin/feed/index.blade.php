@extends('layouts.jun-app')

@section('css')
<style>
    td,
    th {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 10px
    }
</style>
@endsection
@section('main')
<div class="container">
    <hr>
    <table id="feedTable" class="">
        <thead>
            <tr>
                <th>表單編號</th>
                <th>表單狀態</th>
                <th>餵食日期</th>
                <th>浪浪種類</th>
                <th>浪浪數量</th>
                <th>表單詳細內容與編輯</th>
                <th>刪除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedData as $feed)
            <tr>
                <td>{{$feed->id}}</td>
                <td>{{$feed->feedStatus->name}}</td>
                <td>{{$feed->date}}</td>
                <td>{{$feed->name}}</td>
                <td>{{$feed->quantity}}</td>
                <td><a href="/admin/feed/{{$feed->id}}/edit" class="btn btn-success btn-sm">查看詳細內容</a></td>
                <td>
                    <form id="delete_{{$feed->id}}" action="/admin/feed/{{$feed->id}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$feed->id}}">刪除表單</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
    var delBtns = document.querySelectorAll('.delete-btn');
    delBtns.forEach(function (btn) {
    btn.addEventListener('click',function () {
        if(confirm('是否要刪除這則表單?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
@endsection