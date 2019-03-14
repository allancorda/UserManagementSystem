<?php

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
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit', 'UserController@edit');

Route::get('/list','UserController@show');

Route::get('/add', 'UserController@create');
Route::patch('/add',  ['as' => 'users.addUser', 'uses' => 'UserController@addUser']);


Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('/ssr', function() {
    $v8 = new V8js();

    $jsOutput = $v8 -> executeString('
        var hello = "Hello World";
        var word = "Allan Corda";
        hello + " " + world
    ');

    return view('welcome', ["welcome" -> $jsOutput]);
});