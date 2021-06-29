@extends('layouts.app')

@section('css')
{{-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
<style>
    td,
    th {
        max-width:15vw;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 10px;
    }
</style>
@endsection

@section('main')
<div class="container">
    <a href="/admin/rescue/create " class="btn btn-primary">新增救援單位</a>
    <table id="rescueTable">
        <thead>
            <tr>
                <th>單位名稱</th>
                <th>單位地址</th>
                <th>單位電話</th>
                <th>單位網站</th>
                <th>排序(1最前)</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rescueData as $rescue)
            <tr>
                <td>{{$rescue->name}}</td>
                <td>{{$rescue->address}}</td>
                <td>{{$rescue->number}}</td>
                <td>{{$rescue->website}}</td>
                <td>{{$rescue->sort}}</td>
                <td><a href="/admin/rescue/{{$rescue->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                    <form id="delete_{{$rescue->id}}" action="/admin/rescue/{{$rescue->id}}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="#delete_{{$rescue->id}}">刪除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
<script>
    document.querySelectorAll('.delete-btn').forEach(function (btn) {
    btn.addEventListener('click',function () {
        var id=this.getAttribute('data-id');
        if(confirm('是否要刪除這個標籤?')){
            document.querySelector(id).submit();
        }
    });
})
</script>
{{-- <script>
    $(function () {
        $("#rescueTable").DataTable({
            searching: true,    //關閉filter功能
            columnDefs: [{
                targets: [6],
                orderable: false,
            }]
        });
    });
</script> --}}
@endsection