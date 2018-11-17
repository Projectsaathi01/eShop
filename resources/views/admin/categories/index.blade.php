@extends('admin.dashboard')
@section('content')
	<div class="col-md-12">
		<form action="{{route('admin.category.create')}}" method="POST">
			<input type="submit" name="categories" class="btn-btn-primary" value="Add Category">
		</form>
		<h2>Categories List</h2>
		
	</div>
@endsection