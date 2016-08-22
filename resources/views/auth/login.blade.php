@extends('layouts.master')
@section('content')
	<div class="container">
		<div id="form-head">
			<h2>Login: </h2>
		</div>
		<div id="form-body">
			<form method="POST" action="{{ action('Auth\AuthController@getLogin') }}" role="form">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email: </label>
					<input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="Enter email." autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input id="password" name="password" type="password" placeholder="Enter password.">
				</div>
				<button class="btn btn-primary" type="submit" id="button-login"> <span class="glyphicon glyphicon-log-in"></span> Login </button>
				<div class="checkbox">
					<label for="remember"><input id="remember" name="remember" type="checkbox" checked>Remember me?</label>
				</div>
			</form>
		</div>
	</div>
@stop