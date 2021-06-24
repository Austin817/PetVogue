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
    <form action="/admin/feed_status/{{$feed_status->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯表單進度
        @method('PUT')
        <div class="form-group">
            <label for="name">表單進度</label>
            <input type="text" id="name" name="name" value="{{$feed_status->name}}">
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認編輯</button>
    </form>
</div>
@endsection

@section('js')
@endsection