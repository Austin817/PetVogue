@extends('layouts.app')




@section ('css')
    <link rel="stylesheet" href="{{ asset('css/products_list_page.css') }}">
    
    {{-- datatables --}}
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- datatables --}}
@endsection



@section('main')





    <table id="products" class="display">
        <thead>
            <tr>
                <th>name</th>
                <th>type_id</th>
                <th>img</th>
                <th>description</th>
                <th>price</th>
                <th>Features
                    <a class="createBtn float-right" href="/admin/product/create">
                        <button>Create New +</button>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productsData as $Data)
                <tr>
                    <td>{{$Data->name}}</td>
                    <td>{{$Data->type_id}}</td>
                    <td><img src="{{asset($Data->img)}}" style="height:auto;width:100px" alt=""></td>
                    <td>{!!$Data->description!!}</td>
                    <td>{{$Data->price}}</td>
                    <td>
                        <a class="killBtn" data-href="/admin/delete/{{$Data->id}}">
                            <button>Kill Item</button>
                        </a>
                        <a class="editBtn" href="/admin/product/{{$Data->id}}/edit">
                            <button>Edit Item</button>
                        </a>
                        <a class="deleteBtn" data-id="#delete_{{$Data->id}}">
                            <button>Delete Item</button>
                            <form id="delete_{{$Data->id}}" action="/admin/product/{{$Data->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>







    @foreach ($productsData as $Data)

    <div class="wrapper">
      <div class="product-img">
        <div style="background-image:url({{asset($Data->img)}}); background-position:center; background-size:cover; background-repeat:no-repeat; width:327px; height:420px;"></div>
      </div>
      <div class="product-info">
        <div class="product-text">
          <h1>{{$Data->name}}</h1>
          <h2>by studio and friends</h2>
          <div class="description">{!!$Data->description!!}</div>
        </div>
        <div class="product-price-btn d-flex flex-column mt-0 justify-content-between">
          <p>$<span>{{$Data->price}}</span></p>
          <button type="button">buy now</button>
        </div>
      </div>
    </div>
    
    @endforeach





@endsection







@section ('js')
    {{-- jquery --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> --}}
    {{-- jquery --}}

    {{-- datatables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    {{-- datatables --}}

    <script>
        var btnDelete = document.querySelectorAll('.killBtn');
        btnDelete.forEach(function (btn) {
            btn.addEventListener('click',function () {
                if (confirm ('真的?')) {
                    location.href = this.getAttribute('data-href');
                }
            })
        });
    </script>

    <script>
        $(function () {
            $("#products").DataTable({
                searching: true,    //關閉filter功能
                columnDefs: [{
                    targets: [5],
                    orderable: false,
                }]
            });
        });
    </script>
@endsection