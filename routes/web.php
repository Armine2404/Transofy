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
    return view('auth.register');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/lead', 'LeadmarchantController@index');
Route::get('/addlead', 'LeadmarchantController@create');
Route::post('/storeLead', 'LeadmarchantController@store');
Route::get('/lead/show/{lead}', 'LeadmarchantController@show');

Route::get('/review/create', 'ReviewController@create');
Route::post('/review/store', 'ReviewController@store');


Route::get('/sms/create', 'SmsCampController@create');
Route::post('/sms/store', 'SmsCampController@store');
Route::get('/sms/index', 'SmsCampController@index');

Route::get('/cupon/create', 'CuponController@create');
Route::post('/cupon/store', 'CuponController@store');
Route::get('/cupon/index', 'CuponController@index');

Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile/store', 'ProfileController@store');
Route::get('/profile/index', 'ProfileController@index');
Route::get('/profile/show/{user}', 'ProfileController@show');


Auth::routes();

