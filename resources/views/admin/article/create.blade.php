@extends('layouts.app')

@section('css')
<style>
    input,textarea{
        width: 100%;
    }
</style>
@endsection

@section('main')
<div class="container">
    <form action="/admin/article" method="POST" enctype="multipart/form-data">
        @csrf
        新增文章
        <hr>
        <div class="form-group">
            <label for="title">文章標題</label>
            <textarea name="title" id="title" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">張貼日期</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="label_id">文章標籤</label>
            <select name="label_id" id="label_id" required>
                @foreach ($articleLabels as $articleLabel)
                <option value="{{$articleLabel->id}}">{{$articleLabel->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="img">內文圖片</label>
            <input type="file" accept="image/*" class="form-control" id="img" name="img" required>
        </div>
        
        <div class="form-group">
            <label for="text">內文文字</label>
            <textarea name="text" id="text" rows="6" required></textarea>
        </div>

        <div class="form-group">
            <label for="text">參考網站</label>
            <input type="text" id="reference" name="reference" required>
        </div>

        <div class="form-group">
            <label for="text">參考網站網址</label>
            <textarea name="website" id="website" rows="1" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger btn-sm">確認送出</button>
    </form>
</div>
@endsection

@section('js')
@endsection