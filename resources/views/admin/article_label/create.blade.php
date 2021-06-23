@extends('layouts.jun-app')

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
        <div class="form-group">
            <label for="name">類別名稱</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection