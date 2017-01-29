<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hello', function () {
//    return 'welcome to World';
//});
//Route::get('hello','HelloController@index');
//Route::get('hello/{name}/{surname}','HelloController@show');

Route::get('/','PropertyFront@index');
Route::get('/plumbers/{postcode}','PropertyFront@getPlumberDetails');
/*Route::get('/products','PropertyFront@properties');
Route::get('/{postcode}','PropertyFront@getPlumberDetails');
*/