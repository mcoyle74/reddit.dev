@extends('layouts.master')
@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->url }}</td>
					<td>{{ $post->content }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $posts->render() !!}	
@stop