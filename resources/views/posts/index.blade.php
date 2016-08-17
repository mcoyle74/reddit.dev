@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
		@foreach ($posts as $post)
			<tr>
				<td>{{ $post->title }}</td>
				<td>{{ $post->url }}</td>
				<td>{{ $post->content }}</td>
			</tr>
		@endforeach
	</table>
@stop