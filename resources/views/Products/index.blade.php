@extends('layout.master')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 dash">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          
          <!--  -->         
        
<div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product's Name</th>
                            <th>Product's Brand</th>
                            <th>Product's Quantity</th>
                            <th>Product's Unit</th>
                            <th>Product's Unit Cost</th>
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
                                <td>{{$product->product_qty}}</td>
                                <td>{{$product->product_unit}}</td>
                                <td>{{$product->product_cost}}</td>
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
        </main>

@endsection
    