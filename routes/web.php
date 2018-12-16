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
Route::get('/tampilan', function () {
    return view('Tampilan/index');
});
Route::get('/tampilan', function () {
    return view('Tampilan/Utama');
});
//route untuk memanggil view contoh1.php
Route::get('/contoh1/{nama}', function ($nama) {
    return view('contoh1',['nama'=>$nama]);
});
//route untuk memanggil view contoh2.php
Route::get('/contoh2/{nama}', function ($nama) {
    return view('contoh2',['nama'=>$nama]);
});
Route::get('/about', function () {
    return view('Tampilan/about');
});
Route::get('/contac', function () {
    return view('Tampilan/contact');
});
Route::get('/indexx', function () {
    return view('Tampilan/indexx');
});
Route::get('/post', function () {
    return view('Tampilan/post');
});