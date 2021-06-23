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
    <form action="/admin/feed/{{$feed->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        詳細表單內容
        @method('PUT')
        餵食日期:<p>{{$feed->date}}</p>
        浪浪種類:<p>{{$feed->name}}</p>
        浪浪數量:<p>{{$feed->quantity}}</p>
        浪浪外觀及狀態:<p>{{$feed->description}}</p>
        浪浪照片及街景照片<div><img src="{{$feed->img}}" alt="" style="width:50%;"></div>
        @foreach ( $feed->feedImgs as $img)
        浪浪照片及街景照片<div><img src="{{$img->img}}" alt="" style="width:50%;"></div>
        @endforeach
        浪浪位置:<p>{{$feed->address}}</p>
        <div class="form-group">
            <label for="status_id">文章標籤</label>
            <select name="status_id" id="status_id" required>
                @foreach ($feedstatuses as $feedstatus)
                <option value="{{$feedstatus->id}}"@if ($feedstatus->id == $feed->status_id) selected @endif>{{$feedstatus->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">已編輯表單狀態並送出</button>
    </form>
</div>
@endsection
@section('js')
@endsection