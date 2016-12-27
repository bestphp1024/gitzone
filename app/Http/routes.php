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
Route::get('index',"IndexController@index");
Route::get('test',function(){
    return $_SERVER['SERVER_ADDR'];//服务器IP地址
});
/*$_SERVER['REMOTE_ADDR'];//用户IP地址
$_SERVER['SERVER_ADDR'];//服务器IP地址
$_SERVER['SERVER_NAME'];//用户域名
$_SERVER['DOCUMENT_ROOT'];//服务器根目录
$_SERVER['SCRIPT_FILENAME'];//绝对文件路径(项目的入口文件的绝对路径)*/