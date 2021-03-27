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

Route::get('/', function () 
{
    return view('welcome');
});

// ●アカウント登録関係

// ユーザー管理　リソースフル確認
Route::resource('user', 'UserController', ['only' => ['index', 'create', 'store']]);

// ToDoアプリケーション
Route::resource('todo', 'TodoController', ['only' => ['index', 'store', 'update', 'destroy']]);

// ToDo-タスク完了・未完了判定
Route::post('/todo/done/{id}', 'TodoController@done')->name('todo.done');