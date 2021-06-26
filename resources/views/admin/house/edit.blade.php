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
    <form action="/admin/house/{{$house->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯動物之家
        <hr>
        @method('PUT')
        <div class="form-group">
            <label for="number">顯示幾個?(以sort=1的為準)</label>
            <input type="number" id="number" name="number" value="{{$house->number}}" required>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="name" name="name" value="{{$house->name}}" required>
        </div>
        <div class="form-group">
            <label for="img1">網站大圖</label>
            <img src="{{$house->img}}" alt="" style="width:50%;">
            <input type="file" accept="image/*" class="form-control" id="img" name="img" >
        </div>       
        <div class="form-group">
            <label for="website">連結網址</label>
            <input type="text" id="website" name="website" value="{{$house->website}}" required>
        </div>

        <div class="form-group">
            <label for="sort">排序(1最前)</label>
            <input type="number" id="sort" name="sort" value="{{$house->sort}}" required>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認編輯</button>
    </form>
</div>
@endsection

@section('js')
@endsection