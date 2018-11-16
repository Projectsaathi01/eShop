@extends('admin.dashboard')
@section('content')
	<form action="{{route('admin.category.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<input type="text" name="title" class="form-control">
		</div>
	</form>
@endsection