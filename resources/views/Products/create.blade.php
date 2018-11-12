@extends('products.index')
@section('product_create')
    <div class="col-md-6">
    	<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
    			<input type="text" name="product_name" placeholder="Product Name" class="form-control">
    		</div>
    		<div class="form-group">
    			<input type="text" name="product_brand" placeholder="Product Brand" class="form-control">
    		</div>
    		<div class="form-group">
    			<input type="number" name="product_qty" placeholder="Product Quantity" class="form-control">
    		</div>
    		<div class="form-group">
    			<input type="text" name="product_unit" placeholder="Product Unit" class="form-control">
    		</div>
    		<div class="form-group">
    			<input type="number" step=".01" name="product_cost" placeholder="Product Unit Cost" class="form-control">
    		</div>
			<div class="form-group">
				<label for="imageInput">Product's Image</label>
				<input data-preview="#preview" type="file" name="product_image">
				<img src="" class="col-sm-6" id="preview">
			</div>
			<div class="form-group">
				<input type="submit" name="register" value="Submit" class="btn btn-success">
				<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
			</div>
    	</form>
    </div>
@endsection