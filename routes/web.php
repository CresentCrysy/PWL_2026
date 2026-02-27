<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/world', function () {
 return 'World';
});

Route::get('/greet', function () {
    return 'Selamat datang';
});

Route::get('/about', function () {
    return 'Raymon Devtant<br>Nim : 244107020009';
});

// Route with parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/route/{id}', function ($id){
 return 'Halaman Artikel dengan ID {'.$id. '}';
});

// Optional parameter
Route::get('/user/{name?}', function ($name=null) {
 return 'Nama saya '.$name;
});

// Optional parameter with default value
Route::get('/user/{name?}', function ($name='John') {
 return 'Nama saya '.$name;
});

