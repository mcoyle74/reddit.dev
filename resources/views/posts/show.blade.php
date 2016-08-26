@extends('layouts.master')
@section('content')
	<div class="row">

		<div class="col-sm-8">
			<h1>{{ $post->title }}</h1>
			<h2>Posted by: {{ $post->user->name }} <small>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</small></h2>
			<a href="{{ $post->url }}">{{ $post->url }}</a>
			<p>{{ $post->content }}</p>
		</div>
		<div class="col-sm-4" id="vote-div">
			<div class="row">
				<img src="/img/arrow-up.png" class="img-responsive center-block">
			</div>
			<div class="row">
				<p class="text-center" id="vote-score">4</p>
			</div>
			<div class="row">
				<img src="/img/arrow-down.png" class="img-responsive center-block">
			</div>
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