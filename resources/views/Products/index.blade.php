@extends('layout.master')
@section('content')

               
        
  <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product's Name</th>
                            <th>Product's Brand</th>
                            <th>Product's Model</th>
                            <th>Product's Quantity</th>
                            <th>Product's Unit</th>
                            <th>Product's Unit Cost</th>
                            <th>Product's Size</th>
                            <th>Product's Color</th>
                            <th>Product's Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($products->count() > 0)
                          @foreach($products as $product)
                          <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_brand}}</td>
                                <td>{{$product->product_model}}</td>
                                <td>{{$product->product_qty}}</td>
                                <td>{{$product->product_unit}}</td>
                                <td>{{$product->product_cost}}</td>
                                <td>{{$product->product_size}}</td>
                                <td>{{$product->product_color}}</td>
                                <td>{{$product->product_image}}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                 </td>
                          </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
      

@endsection
    