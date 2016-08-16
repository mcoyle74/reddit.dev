<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name?}', function ($name = 'Michael') {
	return "Hello, $name!";
});

Route::get('/uppercase/{word}', function ($word) {
	return strtoupper($word);
});

Route::get('/increment/{number}', function ($number) {
	return intval($number) + 1;
});

Route::get('/add/{a}/{b}', function ($a, $b) {
	return intval($a) + intval($b);
});

Route::get('/rolldice/{guess}', function ($guess) {
	$roll = mt_rand(1, 6);
	$roll == $guess ? $match = 'YES!' : $match = 'No luck!';
	$data = ['roll' => $roll,
			'guess' => $guess,
			'match' => $match];
	return view('roll-dice', $data);
});