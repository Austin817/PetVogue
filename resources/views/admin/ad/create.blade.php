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
    <form action="/admin/ad" method="POST" enctype="multipart/form-data">
        @csrf
        新增廣告
        <hr>
        <div class="form-group">
            <label for="name">廣告名稱</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="img">廣告圖片</label>
            <input type="file" accept="image/*" class="form-control" id="img" name="img" required>
        </div>
    
        <div class="form-group">
            <label for="text">連結網址</label>
            <textarea name="website" id="website" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認新增</button>
    </form>
</div>
@endsection

@section('js')
@endsection