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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/company', function () {
    return view('pages.company');
});
Route::get('/career', function () {
    return view('pages.career');
});
Route::get('/media', function () {
    return view('pages.media');
});
Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/webmails', function () {
    return view('pages.webmails');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Admin Section
Route::get('/slider/create', 'SliderController@create');
Route::post('/slider/store', 'SliderController@store');
Route::get('/slider/view', 'SliderController@show');

