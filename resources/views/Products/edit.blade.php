<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row"> 
			<div class="col-md-8">
				<form method="POST" action="{{ route('products.update', ['id' => $product->id]) }}">
					<!-- for CSRF Protection -->
					<!-- {{ @csrf_field() }} -->
					@csrf
					@method('PUT')

					<div class="form-group">
    			        <input type="text" name="product_name" placeholder="Product Name" class="form-control" value="{{ $product->product_name }}">
    		        </div>
    		        <div class="form-group">
    		        	<input type="text" name="product_brand" placeholder="Product Brand" class="form-control" value="{{ $product->product_brand }}">
    		        </div>
    		        <div class="form-group">
    		        	<input type="number" name="product_qty" placeholder="Product Quantity" class="form-control" value="{{ $product->product_qty }}">
    		        </div>
    	        	<div class="form-group">
    	        		<input type="text" name="product_unit" placeholder="Product Unit" class="form-control" value="{{ $product->product_unit }}">
    	        	</div>
    	        	<div class="form-group">
    		        	<input type="number" step=".01" name="product_cost" placeholder="Product Unit Cost" class="form-control" value="{{ $product->product_cost }}">
    		        </div>
			        <div class="form-group">
			        	<label for="imageInput" >Product's Image</label>
			        	<input data-preview="#preview" type="file" name="product_image" value="{{ $product->product_image }}">
			        	<img src="" class="col-sm-6" id="preview" >
			        </div>
		        	<div class="form-group">
		        		<input type="submit" name="register" value="Submit" class="btn btn-success">
		        		<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
		        	</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>