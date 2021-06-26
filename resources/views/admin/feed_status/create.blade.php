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
    <form action="/admin/feed_status" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">表單進度</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認新增</button>
    </form>
</div>
@endsection

@section('js')
@endsection