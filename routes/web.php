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

// ●アカウント登録関係
// サインアップ画面
Route::get('/user/sign_up', 'UserController@sign_up');

// ログイン画面
Route::get('/user/login', 'UserController@login');