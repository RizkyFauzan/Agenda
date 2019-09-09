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
Route::get('/kontak',function(){
	return view('kontak');
});
Route::get('/alamat',function(){
	return view('alamat');
});
Route::get('/email',function(){
	return view('email');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial";
});
Route::get('/login',function(){
	return view('login');
});
Route::get('/register',function(){
	return view('register');
});
//route blog
Route::get('/Blog', 'Blogcontroller@hume');
Route::get('/Blog/tentang','Blogcontroller@tentang');
Route::get('/Blog/pesan','Blogcontroller@pesan');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dosen', 'dosencontroller@index');
Route::get('/pegawai/{nama}', 'pegawaicontroller@index');
Route::get('/formulir', 'pegawaicontroller@formulir');
Route::post('/formulir/proses', 'pegawaicontroller@proses');
//route CRUD
Route::get('/pegawaian','pegawaiancontroller@index');