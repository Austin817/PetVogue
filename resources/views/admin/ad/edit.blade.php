@extends('layouts.jun-app')

@section('css')
<style>
    input,textarea{
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/ad/{{$ad->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯廣告
        <hr>
        @method('PUT')
        <div class="form-group">
            <label for="name">廣告名稱</label>
            <input type="text" id="name" name="name" value="{{$ad->name}}">
        </div>

        <div class="form-group">
            <label for="img">廣告圖片</label>
            <img src="{{$ad->img}}" alt="" style="width:50%;">
            <input type="file" accept="image/*" class="form-control" id="img" name="img">
        </div>

        <div class="form-group">
            <label for="text">連結網址</label>
            <textarea name="website" id="website" rows="1">{{$ad->website}}</textarea>
        </div>
        <button type="submit">編輯</button>
    </form>
</div>
@endsection
@section('js')
@endsection