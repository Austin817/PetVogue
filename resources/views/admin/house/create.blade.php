@extends('layouts.app')

@section('css')
<style>
    input,textarea{
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/house" method="POST" enctype="multipart/form-data">
        @csrf
        新增動物之家
        <hr>
        <div class="form-group">
            <label for="number">顯示幾個?(以sort=1的為準)</label>
            <input type="number" id="number" name="number" required>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="img">網站大圖</label>
            <input type="file" accept="image/*" class="form-control" id="img" name="img" required>
        </div>   
        <div class="form-group">
            <label for="website">連結網址</label>
            <input type="text" id="website" name="website" required>
        </div>

        <div class="form-group">
            <label for="sort">排序(1最前)</label>
            <input type="number" id="sort" name="sort" required>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認新增</button>
    </form>
</div>
@endsection

@section('js')
@endsection