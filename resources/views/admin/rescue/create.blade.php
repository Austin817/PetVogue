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
    <form action="/admin/rescue" method="POST" enctype="multipart/form-data">
        @csrf
        新增單位
        <div class="form-group">
            <label for="name">單位名稱</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">單位地址</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="number">單位電話</label>
            <input type="text" id="number" name="number" required>
        </div>
        <div class="form-group">
            <label for="website">單位網站</label>
            <input type="text" id="website" name="website" required>
        </div>
        <div class="form-group">
            <label for="sort">排序(1最前)</label>
            <input type="mumber" id="sort" name="sort" required>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認新增</button>
    </form>
</div>
@endsection

@section('js')
@endsection