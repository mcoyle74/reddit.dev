@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
			<th>Created</th>
			@if ($post->ownedBy(Auth::user()))
				<th>Edit/Delete</th>
			@endif
		</tr>
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
			<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
			@if ($post->ownedBy(Auth::user()))
				<td>
					<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary">Edit</a><br>
					<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button class="btn btn-danger">Delete</button>
				</form>	
				</td>
				
			@endif
		</tr>
	</table>
@stop