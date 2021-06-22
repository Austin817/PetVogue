@extends('layouts.jun-app')

@section('css')
<style>
    td,th {
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
    <a href="/admin/article/create" class="btn btn-primary">新增文章</a>
    <hr>
    <table id="articleTable" class="">
        <thead>
            <tr>
                <th>文章標題</th>
                <th>文章日期</th>
                <th>文章標籤</th>
                <th>文章圖片</th>
                <th>文章內文</th>
                <th>參考網站</th>
                <th>編輯刪除按鈕</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articleData as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->date}}</td>
                <td>{{$article->articleLabel->name}}</td>
                <td><img src="{{$article->img}}"style="width:100%;"></td>
                <td>{{$article->text}}</td>
                <td><a href="{{$article->website}}">{{$article->reference}}</a></td>
                <td><a href="/admin/article/{{$article->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$article->id}}" action="/admin/article/{{$article->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$article->id}}">刪除</button>
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
        if(confirm('是否要刪除這篇文章?')){
            var id=this.getAttribute('data-id');
            document.querySelector(id).submit();
        }
    });
})
</script>
@endsection