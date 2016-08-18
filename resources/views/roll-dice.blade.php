@extends('layouts.master')
@section('content')
	<h1>
		Roll: {{ $roll }}<br>
		Guess: {{ $guess }}<br>
		Match: {{ $match }}
	</h1>
	<h3>Guess again:</h3>
	<ul>
		@for ($i = 1; $i <= 6; $i++)
			<li><a href="{{ action('HomeController@rollDice', $i) }}">{{ $i }}</a></li>
		@endfor
	</ul>
@stop