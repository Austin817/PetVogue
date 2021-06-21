@extends('layouts.jun-app')

@section('css')
<style>
    input {
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/rescue/{{$rescue->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">單位名稱</label>
            <input type="text" id="name" name="name" value="{{$rescue->name}}">
        </div>
        <div class="form-group">
            <label for="address">單位地址</label>
            <input type="text" id="address" name="address" value="{{$rescue->address}}">
        </div>
        <div class="form-group">
            <label for="number">單位電話</label>
            <input type="text" id="number" name="number" value="{{$rescue->number}}">
        </div>
        <div class="form-group">
            <label for="website">單位網站</label>
            <input type="text" id="website" name="website" value="{{$rescue->website}}">
        </div>
        <div class="form-group">
            <label for="sort">排序(1最前)</label>
            <input type="mumber" id="sort" name="sort" value="{{$rescue->sort}}">
        </div>
        <button type="submit">送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection