@extends('layouts.master')
@section('content')
	<form method="GET" class="form-inline">
		<div class="form-group">
			<input name="keyword" type="text" class="form-control" placeholder="Search post titles">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</form>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
				<th>Date</th>
				<th>User</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
					<td>{{ $post->content }}</td>
					<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
					<td>{{ $post->user->name }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $posts->render() !!}
	</div>
	<div>
		<a href="{{ action('PostsController@create') }}">Create a Post</a>
	</div>
@stop