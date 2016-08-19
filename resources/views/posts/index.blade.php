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
				</tr>
			@endforeach
		</tbody>
	</table>
@stop