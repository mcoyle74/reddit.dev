@extends('layouts.master')
@section('content')
	<form method="GET" class="form-inline pull-right">
		<div class="form-group">
			<input name="keyword" type="text" class="form-control" placeholder="Search post titles">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</form>
	<div class="">
		@foreach ($posts as $post)
			<div class="">
				<a href="{{ action('PostsController@show') }}" class="title">{{ $post->title }}</a>
				<p>submitted {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }} by {{ $post->user->name }}</p>
			</div>
		@endforeach
	</div>
	<div class="text-center">
		{!! $posts->render() !!}
	</div>
	<div>
		<a href="{{ action('PostsController@create') }}">Create a Post</a>
	</div>
@stop