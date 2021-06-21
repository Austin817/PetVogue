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

// Route::view('/', 'index');

// 前端畫面
// Front Controller
Route::prefix('/')->group(function (){

    // 顯示首頁
    Route::get('/','FrontController@index');

});


// About Front Controller
Route::prefix('/about')->group(function (){

    // 顯示首頁
    Route::get('/','AboutFrontController@index');
    
});


// Donate Front Controller
Route::prefix('/donate')->group(function (){

    // 顯示首頁
    Route::get('/','DonateFrontController@index');
    // 顯示捐款頁
    Route::get('/cash','DonateFrontController@cash');
    
});


// Owner Front Controller
Route::prefix('/owner')->group(function (){

    // 顯示首頁
    Route::get('/','OwnerFrontController@index');
    
});


// Event Front Controller
Route::prefix('/event')->group(function (){

    // 顯示首頁
    Route::get('/','EventFrontController@index');
    
});


// Login Controller
Route::prefix('/login')->group(function (){

    // 顯示首頁
    Route::get('/','LoginController@index');
    
});


// Register Controller
Route::prefix('/register')->group(function (){

    // 顯示首頁
    Route::get('/','RegisterController@index');
    
});


// Shop Front Controller
Route::prefix('/shop')->group(function (){

    // 顯示首頁
    Route::get('/','ShopFrontController@index');

    // 顯示內頁
    Route::get('/detail/{id}','ShopFrontController@detail');
    
});



// Shopping Cart Front Controller
Route::prefix('/shopping_cart')->group(function (){
    Route::post('/add', 'ShoppingCartFrontController@add');

    Route::get('/list_1', 'ShoppingCartFrontController@list');

    // 登入需求
    Route::middleware('auth','cartCheck')->group(function(){
        Route::post('/update', 'ShoppingCartFrontController@update');
        Route::post('/delete', 'ShoppingCartFrontController@delete');
        Route::get('/content', 'ShoppingCartFrontController@content');
        // Route::get('/list_1', 'ShoppingCartFrontController@list');
        Route::get('/information_2', 'ShoppingCartFrontController@information');
        Route::get('/checkout_3', 'ShoppingCartFrontController@checkout');
    });
    
});







Route::prefix('cart_ecpay')->group(function(){
    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'ShoppingCartFrontController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'ShoppingCartFrontController@returnUrl')->name('return');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
