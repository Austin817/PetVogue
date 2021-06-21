<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::prefix('cart_ecpay')->group(function(){
    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'ShoppingCartController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'ShoppingCartController@returnUrl')->name('return');
});

//文章頁前端
Route::prefix('articles')->group(function (){
    Route::get('/', 'ArtileFrontController@articlesIndex');
    Route::get('/content/{id}', 'ArtileFrontController@articlesContent');
});

//文章頁後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('article', 'ArticleController');
    Route::resource('article_label', 'ArticleLabelController'); 
});

//廣告後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('ad', 'AdController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
