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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/messageboard', function () {
    return "This is messageboard";
});*/


Route::get('/homepage', 'Controller@homepage');
Route::get('/about', 'Controller@about');
Route::get('/me', 'Controller@me');
Route::get('/site', 'Controller@site');
Route::get('/users', 'Controller@users');

//Route::get('/blogindex', 'blogController@index');
Route::get('/blog', 'blogController@blog');//展示網誌
Route::get('/blogadd', 'blogController@blogadd');//新增網誌表單
Route::post('/blogadd', 'blogController@blogaddadd');//新增網誌
Route::get('/blog/del/{id}', 'blogController@del')->where('id','[0-9]{1,3}');//刪除網誌
Route::match(['get','post'],'blogedit/{id}', 'blogController@edit')->where('id','[0-9]{1,3}');//編輯網誌
//Route::post('/blogadd', 'blogController@uploadpicture');//上傳圖片-新增網誌
//Route::post('/blogedit/{id}', 'blogController@uploadpicture')->where('id','[0-9]{1,3}');//上傳圖片-編輯網誌

Route::match(['get','post'],'/index', 'MsgsController@index'); //展示留言列表
Route::get('/messageboard', 'MsgsController@messageboard'); //展示表單
Route::post('/messageboard', 'MsgsController@addPost'); //存入資料庫
Route::get('/messageboard/del/{id}', 'MsgsController@del')->where('id','[0-9]{1,3}');//刪除留言
Route::match(['get','post'],'edit/{id}', 'MsgsController@edit')->where('id','[0-9]{1,3}');//編輯留言

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::match(['get', 'post'], '/homepage', 'homepageController@homepage');
/*Route::get('/users', function()
{
    return View::make('users');
});*/
Route::auth();

Route::get('/home', 'HomeController@index');
