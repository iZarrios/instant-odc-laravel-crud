@extends('web.master')

@section('title', '- Categories')

@section('content')
<h1 class="my-5 text-center">Add New Category</h1>

<a href="{{route('categories.index')}}" class="btn btn-primary my-5">
	All Categories
</a>

@include('web.inc.messages')
<form action="{{route('categories.store')}}" method="POST">
	@csrf
	<div class="mb-3">
		<label for="name" class="form-label">Category Name</label>
		<input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
	</div>

	<div class="mb-3">
		<label for="description" class="form-label">Category Description</label>
		<input type="text" name="description" class="form-control" id="description" value="{{old('description')}}">
	</div>
	<button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection