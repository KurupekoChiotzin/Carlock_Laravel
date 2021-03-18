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

//Route::get('/', function () {
//    return view('welcome');
//});
//註冊
Route::POST('register','carlockController@register');
Route::get('register','carlockController@show_register');

//登入
Route::POST('login','carlockController@loginCheck');
Route::get('login','carlockController@show_login');

//換密碼
Route::POST('changepwd','carlockController@changepwd');
Route::get('changepwd','carlockController@show_changepwd');

//遺失密碼
Route::POST('forgetpwd','carlockController@forgetpwd');
Route::get('forgetpwd','carlockController@show_forgetpwd');

//新增監護人
Route::get('QRgenerator','carlockController@QRgenerator');

//建立監護關係
Route::POST('RSBuild','carlockController@RSBuild');
Route::get('RSBuild','carlockController@show_RSBuild');

//請求監護列表
Route::get('search_RSname','carlockController@search_RSname');

//上傳被監護人座標
Route::POST('updateLocation','carlockController@updateLocation');
Route::get('updateLocation','carlockController@show_updateLocation');

//請求被監護人座標
Route::POST('requestLocation','carlockController@requestLocation');
Route::get('requestLocation','carlockController@show_requestLocation');

