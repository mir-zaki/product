@extends('master')
@section('content')
 <form action="{{route('product.post')}}" method="post" id="productForm">


    @csrf


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


        <label for="productName">Product Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="productPrice">Product Quantity:</label><br>
        <input type="text" id="quantity" name="quantity"><br>
        <label for="productPrice">Product Price:</label><br>
        <input type="text" id="price" name="price"><br>

        <input type="submit" value="Add Product">
    </form>


    <div>
        <table>
            <tr>
                <th>No.</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>



            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->quantity}}</td>
                <td>
                    <a href="{{route('product.edit',$product->id)}}"><i  style="font-size:24px"></i>Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this item?');" href="{{route('product.delete',$product->id)}}"><i class="fa fa-close" style="font-size:24px;color:red"></i>Delete</a>
                </td>

            </tr>
            @endforeach

        </tbody>
          </table>
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
    </div>


@endsection
