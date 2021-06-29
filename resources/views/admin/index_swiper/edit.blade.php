@extends('layouts.app')

@section('css')
<style>
    input,
    textarea {
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/index_swiper/{{$indexswiper->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯swiper
        <hr>
        @method('PUT')
        <div class="form-group">
            <label for="number">顯示幾個?(以sort=1的為準)</label>
            <input type="number" id="number" name="number" value="{{$indexswiper->number}}" required>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="title" name="title" value="{{$indexswiper->title}}" required>
        </div>
        <div class="form-group">
            <label for="img1">網站大圖</label>
            <img src="{{$indexswiper->img1}}" alt="" style="width:50%;">
            <input type="file" accept="image/*" class="form-control" id="img1" name="img1" >
        </div>
        <div class="form-group">
            <label for="img2">網站小圖</label>
            <img src="{{$indexswiper->img2}}" alt="" style="width:50%;">
            <input type="file" accept="image/*" class="form-control" id="img2" name="img2" >
        </div>
        <div class="form-group">
            <label for="text">內文</label>
            <input type="text" id="text" name="text" value="{{$indexswiper->text}}" required>
        </div>
        
        <div class="form-group">
            <label for="website">連結網址</label>
            <input type="text" id="website" name="website" value="{{$indexswiper->website}}" required>
        </div>

        <div class="form-group">
            <label for="sort">排序(1最前)</label>
            <input type="number" id="sort" name="sort" value="{{$indexswiper->sort}}" required>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認編輯</button>
    </form>
</div>
@endsection

@section('js')
@endsection