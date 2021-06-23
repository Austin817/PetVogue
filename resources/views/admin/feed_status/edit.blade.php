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
    <form action="/admin/feed_status/{{$feed_status->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">表單狀態名稱</label>
            <input type="text" id="name" name="name" value="{{$feed_status->name}}">
        </div>
        <button type="submit">送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection