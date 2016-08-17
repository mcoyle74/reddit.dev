@extends('layouts.master')
@section('content')
	<form method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		<label for="title">Title</label>
		<input type="text" name="title" value="{{ old('title') }}">

		<label for="content">Content</label>
		<input type="text" name="content" value="{{ old('content') }}">

		<label for="url">URL</label>
		<input type="url" name="url" value="{{ old('url') }}">

		<button type="submit">Submit</button>
	</form>
@stop