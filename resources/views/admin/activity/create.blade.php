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
    <form action="/admin/activity" method="POST" enctype="multipart/form-data">
        @csrf
        新增活動
        <hr>
        <div class="form-group">
            <label for="title">活動標題</label>
            <textarea name="title" id="title" rows="1"></textarea>
        </div>
        <div class="form-group">
            <label for="date">活動日期</label>
            <input type="date" id="date" name="date">
        </div>

        <div class="form-group">
            <label for="timestart">活動起始時間</label>
            <input type="datetime-local" id="timestart" name="timestart">
        </div>

        <div class="form-group">
            <label for="timeend">活動結束時間</label>
            <input type="datetime-local" id="timeend" name="timeend">
        </div>

        <div class="form-group">
            <label for="address">活動地址</label>
            <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="host">活動主持人</label>
            <input type="text" id="host" name="host">
        </div>

        <div class="form-group">
            <label for="people">活動人數</label>
            <input type="text" id="people" name="people">
        </div>

        <div class="form-group">
            <label for="price">活動費用</label>
            <input type="text" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="img">活動圖片</label>
            <input type="file" accept="image/*" class="form-control" id="img" name="img" required>
        </div>
    
        <div class="form-group">
            <label for="text">活動內文</label>
            <textarea name="text" id="text" rows="6" ></textarea>
        </div>
        
        <button type="submit">送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection