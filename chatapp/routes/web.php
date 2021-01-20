<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat',function() {
	return view('chat');
})->middleware('auth');

Route::get('/messages' ,function () {
		return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages',function() {
	$user =Auth::user();

	$user->messages() ->create([
		'message' => request() ->get('message')
	]);

	return ['status' => "OK"];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
