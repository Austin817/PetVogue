@extends('layouts.jun-app')

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
    <form action="/admin/activity/{{$activity->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        編輯活動
        <hr>
        @method('PUT')
        <div class="form-group">
            <label for="title">活動標題</label>
            <textarea name="title" id="title" rows="1">{{$activity->title}}</textarea>
        </div>
        <div class="form-group">
            <label for="date">活動日期</label>
            <input type="date" id="date" name="date" value="{{$activity->date}}">
        </div>

        <div class="form-group">
            <label for="timestart">活動起始時間</label>
            @php
            $exampleDate = "$activity->timestart";//sql timestamp
            $newDate = date('Y-m-d\TH:i', strtotime($exampleDate));
            @endphp
            <input type="datetime-local" id="timestart" name="timestart" value="{{$newDate}}">
        </div>

        <div class="form-group">
            <label for="timeend">活動結束時間</label>
            @php
            $exampleDate = "$activity->timeend";//sql timestamp
            $newDate = date('Y-m-d\TH:i', strtotime($exampleDate));
            @endphp
            <input type="datetime-local" id="timeend" name="timeend" value="{{$newDate}}">
        </div>

        <div class="form-group">
            <label for="address">活動地址</label>
            <input type="text" id="address" name="address" value="{{$activity->address}}">
        </div>

        <div class="form-group">
            <label for="host">活動主持人</label>
            <input type="text" id="host" name="host" value="{{$activity->host}}">
        </div>

        <div class="form-group">
            <label for="people">活動人數</label>
            <input type="text" id="people" name="people" value="{{$activity->people}}">
        </div>

        <div class="form-group">
            <label for="price">活動費用</label>
            <input type="text" id="price" name="price" value="{{$activity->price}}">
        </div>

        <div class="form-group">
            <label for="img">活動圖片</label>
            <img src="{{$activity->img}}" alt="" style="width:50%;">
            <input type="file" accept="image/*" class="form-control" id="img" name="img">
        </div>

        <div class="form-group">
            <label for="text">活動內文</label>
            <textarea name="text" id="text" rows="6">{{$activity->text}}</textarea>
        </div>
        <button type="submit">編輯</button>
    </form>
</div>
@endsection

@section('js')
@endsection