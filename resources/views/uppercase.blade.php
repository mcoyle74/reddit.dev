@extends('layouts.master')
@section('content')
	<div class="container">
		<p>You entered: {{ $word }}</p>
		<p>Uppercased: {{ $upper }}</p>
	</div>
@stop