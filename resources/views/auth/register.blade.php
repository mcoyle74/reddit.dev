@extends('layouts.master')
@section('content')
	<form method="POST" action="{{ action('Auth\AuthController@getRegister') }}">
	{!! csrf_field() !!}

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{ old('name') }}">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password">
		</div>

		<div class="form-group">
			<label for="password_confirmation">Confirm Password</label>
			<input type="password" name="password_confirmation">
		</div>

		<button class="btn btn-primary" type="submit">Create Account</button>
	</form>
@stop