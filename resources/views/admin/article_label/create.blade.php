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
    <form action="/admin/article_label" method="POST" enctype="multipart/form-data">
        @csrf
        新增文章標籤
        <div class="form-group">
            <label for="name">標籤名稱</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit"  class="btn btn-danger btn-sm">確認送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection