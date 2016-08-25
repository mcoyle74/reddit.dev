@extends('layouts.master')
@section('content')
	<form method="GET" class="form-inline pull-right">
		<div class="form-group">
			<input name="keyword" type="text" class="form-control" placeholder="Search posts">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</form>
	<div class="pull-right" id="create-post-div">
		<a class="btn btn-primary" id="create-post-btn" href="{{ action('PostsController@create') }}">Submit a New Post</a>
	</div>
	<div class="">
		@foreach ($posts as $post)
			<div class="row">
				<div class="post col-md-8">
					<a href="{{ action('PostsController@show', [$post->id]) }}" class="title">{{ $post->title }}</a>
					<p class="date-and-user">submitted {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
				</div>
			</div>
		@endforeach
	</div>
	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop