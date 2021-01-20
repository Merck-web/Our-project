<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\MainController@main_page')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/catalog', 'App\Http\Controllers\MainController@catalog_show')->middleware('auth')->name('catalog');

Route::get('/article', 'App\Http\Controllers\MainController@article_show')->name('article');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/registration', 'App\Http\Controllers\MainController@create_user')->name('reg_post');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', 'App\Http\Controllers\MainController@login')->name('login_post');

Route::get('/logout', 'App\Http\Controllers\MainController@logout')->name('logout');

Route::get('/send',function (){
   return view('write_form');
})->name('write');

Route::post('/send','App\Http\Controllers\MainController@write_message')->name('send_post');
