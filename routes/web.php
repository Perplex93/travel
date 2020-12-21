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

Route::get('contact', function() {
    return view('contact');
});

Route::get('category', function() {
    return view('category.category');
});

Route::get('category_destination', function() {
    return view('category.destination');
});

Route::get('/destination', 'App\Http\Controllers\DestinationController@index');

Route::get('/destination/{id}', 'App\Http\Controllers\DestinationController@show');

Route::get('destination_description', function() {
    return view('destination.description');
});

Route::get('destination_create','App\Http\Controllers\DestinationController@create');

Route::get('media', function() {
    return view('media.media');
});

Route::get('people', function() {
    return view('people.people');
});

Route::get('people_destination', function() {
    return view('people.destination');
});

Route::get('people_spot', function() {
    return view('people.spot');
});

Route::get('recipe', function() {
    return view('recipe.recipe');
});

Route::get('spot', function() {
    return view('spot.spot');
});

Route::get('spot_description', function() {
    return view('spot.description');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('permissions', 'App\Http\Controllers\PermissionController')->middleware('permissions:administrator');

Route::resource('users', 'App\Http\Controllers\UserController')->middleware('permissions:administrator');

Route::resource('people', 'App\Http\Controllers\PeopleController');


Route::resource('maps', 'App\Http\Controllers\MapsController');