@extends('layouts.master')
@section('content')
	<form method="GET" class="form-inline pull-right">
		<div class="form-group">
			<input name="keyword" type="text" class="form-control" placeholder="Search posts">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</form>
	<div class="pull-right">
		<a class="btn btn-primary" href="{{ action('PostsController@create') }}">Create a Post</a>
	</div>
	<div class="">
		@foreach ($posts as $post)
			<div class="vote">
				<a href=""><span class="glyphicon glyphicon-arrow-up"></span></a>
				<p class="count">4</p>
				<a href=""><span class="glyphicon glyphicon-arrow-down"></span></a>
			</div>
			<div class="post">
				<a href="{{ action('PostsController@show', [$post->id]) }}" class="title">{{ $post->title }}</a>
				<p>submitted {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
			</div>
		@endforeach
	</div>
	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop