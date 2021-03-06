@extends('admin.dashboard')
@section('content')
	<form action="{{route('admin.category.store')}}" method="POST">
		@csrf
		<div class="form-group row">
			<div class="col-sm-12">
				<label class="form-control-label">Title:</label>
				<input type="text" id="txturl" name="title" class="form-control">
				<p class="small"><!-- {{config('app.url')}} --><span id="url"></span></p>
				<input type="hidden" name="slug" id="slug" value="">
			</div>
		</div>
		<div class="form-group row">
			<label class="form-control-label">Description</label>
			<textarea name="description" id="editor" class="form-control" rows="10" cols="80"></textarea>
		</div>
		<div class="form-group row">
			<label class="form-control-label">Select Category: </label>
			<select name="parent_id[]" id="parent_id" class="form-control" multiple>
				@if($categories)
					<option value="0">Top Level</option>
					
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->title}}</option>
					@endforeach
				@endif
			
			</select>
		</div>
		<div class="form-group">
			<input type="submit" name="sumbit" class="btn-btn-primary" value="Add Category">
		</div>
	</form>
@endsection