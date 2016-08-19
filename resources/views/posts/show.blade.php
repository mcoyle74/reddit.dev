@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
			<th>Created</th>
		</tr>
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
			<td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
		</tr>
	</table>
@stop