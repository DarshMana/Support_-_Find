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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('catagory', 'CatagoryController');

Route::post('ads', 'AdsController@postPost')->name('posts.post');
Route::get('/test', function () {
    return view('test');
});


Route::get('/ads', 'AdsController@index')->name('ads');
Route::get('/ads/{id}', 'AdsController@singleIndex');
Route::get('/search', 'AdsController@search');
Route::get('/filter', 'AdsController@filterRating');

Route::get('/online', function () {
    return view('online.help');
});

Route::get('/contactus', function () {
    return view('contactus.contact');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('/postads', 'AdsController@postAdIndex');
    Route::post('/postads', 'AdsController@postAd')->name('creatAd');

    Route::post('/profileUpdate', 'profileController@update')->name('updateProfile');
    Route::post('/profileDelete', 'profileController@delete')->name('deleteProfile');

});


Route::get('/about', function () {
    return view('about.aboutus');
});
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'can:service-provider'], function() {
    Route::get('/profileupdate', 'ProfileController@index');
});


Route::get('/chat', 'ChatsController@index')->name('chat');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');