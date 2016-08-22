@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
				<th>Created</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>
					{!! $posts->render() !!}
				</td>
			</tr>
		</tfoot>
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
	<a href="{{ action('PostsController@create') }}">Create a Post</a>
@stop