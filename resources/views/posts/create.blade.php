@extends('layouts.master')
@section('content')
	<form method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" value="{{ old('title') }}">
			@if ($errors->has('title'))
				{!!  $errors->first('title', '<span class="alert alert-warning">:message</span>') !!}
			@endif
		</div>

		<div class="form-group">
			<label for="url">URL</label>
			<input class="form-control" type="url" name="url" value="{{ old('url') }}">
			@if ($errors->has('url'))
				{!!  $errors->first('url', '<span class="alert alert-warning">:message</span>') !!}
			@endif
		</div>

		<div class="form-group">
			<label for="content">Content</label>
			<input class="form-control" type="text" name="content" value="{{ old('content') }}">
			@if ($errors->has('content'))
				{!!  $errors->first('content', '<span class="alert alert-warning">:message</span>') !!}
			@endif
		</div>

		<button class="btn btn-default" type="submit">Submit</button>
	</form>
@stop