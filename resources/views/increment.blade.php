@extends('layouts.master')
@section('content')
	<div class="container">
		<p>You entered: {{ $number }}</p>
		<p>Incremented: {{ $increment }}</p>
	</div>
@stop