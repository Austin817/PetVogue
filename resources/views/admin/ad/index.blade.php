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
    <a href="/admin/ad/create" class="btn btn-primary">新增廣告</a>
    <hr>
    <table id="adTable" class="">
        <thead>
            <tr>
                <th>廣告名稱</th>
                <th>廣告圖片</th>
                <th>連結網站</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adData as $ad)
            <tr>
                <td>{{$ad->name}}</td>
                <td><img src="{{$ad->img}}"style="width:100%;"></td>
                <td>{{$ad->website}}</td>
                <td><a href="/admin/ad/{{$ad->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$ad->id}}" action="/admin/ad/{{$ad->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$ad->id}}">刪除</button>
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
        if(confirm('是否要刪除這則廣告?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
@endsection