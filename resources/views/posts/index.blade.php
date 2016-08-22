@extends('layouts.master')
@section('content')
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->url }}</td>
					<td>{{ $post->content }}</td>
					<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
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