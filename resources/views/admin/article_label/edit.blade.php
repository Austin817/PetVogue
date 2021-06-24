@extends('layouts.app')

@section('css')
<style>
    input{
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/article_label/{{$article_label->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯文章標籤
        @method('PUT')
        <div class="form-group">
            <label for="name">標籤名稱</label>
            <input type="text" id="name" name="name" value="{{$article_label->name}}">
        </div>
        <button type="submit"  class="btn btn-danger btn-sm">確認編輯</button>
    </form>
</div>
@endsection

@section('js')
@endsection