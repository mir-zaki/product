@extends('master')
@section('content')
<form action="{{route('product.update',$products->id)}}" method="post" id="productForm">


    @csrf


    <div>
        @method('put')

        <div>

            @if($errors->any())
            @foreach($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
            @endforeach

            @endif

            @if(session()->has('message'))
            <div class="row" style="padding: 20px;">
                <span class="alert alert-success">{{session()->get('message')}}</span>
            </div>
            @endif

        </div>

    </div>


        <label for="productName">Product Name:</label><br>
        <input value="{{$products->name}}" type="text" id="name" name="name"><br>
        <label for="productPrice">Product Quantity:</label><br>
        <input value="{{$products->quantity}}" type="text" id="quantity" name="quantity"><br>
        <label for="productPrice">Product Price:</label><br>
        <input value="{{$products->price}}" type="text" id="price" name="price"><br>

        <input type="submit" value="Update Product">
    </form>
    <style>
        table {
      width: 100%;
      background-color: #f2f2f2;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #eee;
      font-weight: bold;
    }
      </style>


@endsection
