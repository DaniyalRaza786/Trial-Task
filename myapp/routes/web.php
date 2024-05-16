<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
  // $visited = DB::select('select * from places where visited = ?', [1]); 
  // $togo = DB::select('select * from places where visited = ?', [0]);
  return view('welcome');
});

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');


