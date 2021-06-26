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
    <a href="/admin/article_label/create " class="btn btn-primary">新增文章標籤</a>
    <hr>
    <table id="articlelabelTable">
        <thead>
            <tr>
                <th>id</th>
                <th>標籤名稱</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articleLabelData as $articleLabel)
            <tr>
                <td>{{$articleLabel->id}}</td>
                <td>{{$articleLabel->name}}</td>
                <td><a href="/admin/article_label/{{$articleLabel->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$articleLabel->id}}" action="/admin/article_label/{{$articleLabel->id}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$articleLabel->id}}">刪除</button>
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
        if(confirm('是否要刪除這個標籤?')){
            document.querySelector(id).submit();
        }
    });
})
</script>
@endsection