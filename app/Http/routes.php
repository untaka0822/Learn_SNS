<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// localhost:8000が「Learn_SNS/public」のURLと同じ

// 下記のルートはこの場でメソッドを使用し、Controllerを通らずにViewへ直接返している
// Route::get('/', function () {
//     return view('welcome');
// });

// get = formのGET送信と同じ post = POST送信と同じ
// ('リクエストURL', '対応するコントローラー@対応するメソッド');
Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/tweets', 'TweetsController@index');












