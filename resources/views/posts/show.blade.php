@extends('layouts.master')
@section('content')
	<div class="row">

		<div class="">
			<h1>{{ $post->title }}</h1>
			<h2>Posted by: {{ $post->user->name }} <small>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</small></h2>
			<a href="{{ $post->url }}">{{ $post->url }}</a>
			<p>{{ $post->content }}</p>
		</div>
		@if ($post->ownedBy(Auth::user()))
			<div class="">
				<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary">Edit</a><br>
				<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button class="btn btn-danger">Delete</button>
				</form>	
			</div>
		@endif
	</div>
@stop