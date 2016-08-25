@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
			<th>Created</th>
			<th>Edit/Delete</th>
		</tr>
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
			<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
			<td>
				<a href="{{ action('PostsController@edit', [$post->id]) }}">Edit</a><br>
				<a href="/posts/{{$post->id}}">Delete</a>
			</td>
		</tr>
	</table>
@stop