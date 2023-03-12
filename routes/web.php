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

// Route::get('/', function () {
//     return view('welcome');
// });

//index:showの補助ページ(一覧)
// Route::get('tasks', 'TasksController@index')->name('tasks.index');

//新規作成用のフォームページ
// Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

//更新用のフォームページ
// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');


//個別詳細ページ
// Route::get('tasks/{id}', 'TasksController@show');

//新規登録ページ
// Route::post('tasks', 'TasksController@store');

//更新処理ページ
// Route::put('tasks/{id}', 'TasksController@update');

//削除ページ
// Route::delete('taskss/{id}', 'TasksController@destroy');


//最終的に

Route::get('/', 'TasksController@index');

Route::resource('Tasks', 'TasksController');