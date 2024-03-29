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

Route::get('/m', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

        // <div class="flex-center position-ref full-height">
        //     @if (Route::has('login'))
        //         <div class="top-right links">
        //             @auth
        //                 <a href="{{ url('/home') }}">Home</a>
        //             @else
        //                 <a href="{{ route('login') }}">Login</a>
        //                 <a href="{{ route('register') }}">Register</a>
        //             @endauth
        //         </div>
        //     @endif