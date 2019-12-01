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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/consumables', function () {
    return view('consumables');
});
Route::get('/news', 'NewsController@index');

Route::get('/news/{slug}', 'NewsController@post');

Route::get('/support', function () {
    return view('support');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/order-testing', function () {
    return view('order-testing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get ('/{page}/', 'PagesController@page');