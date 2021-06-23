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

//文章頁前端
Route::prefix('articles')->group(function (){
    Route::get('/', 'ArtileFrontController@articlesIndex');
    Route::get('/content/{id}', 'ArtileFrontController@articlesContent');
});

//文章頁後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('article', 'ArticleController');
    //文章標籤後端
    Route::resource('article_label', 'ArticleLabelController'); 
});

//廣告後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('ad', 'AdController');
});

//活動頁前端
Route::prefix('activities')->group(function (){
    Route::get('/', 'ActivityFrontController@activitiesIndex');
    Route::get('/content/{id}', 'ActivityFrontController@activitiesContent');
});

//活動頁後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('activity', 'ActivityController');
});

//救援頁前端
Route::prefix('rescues')->group(function (){
    Route::get('/', 'RescueFrontController@rescuesIndex');
});

//救援頁後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('rescue', 'RescueController');
});

//餵食頁前端
Route::prefix('feeds')->group(function (){
    Route::get('/', 'FeedFrontController@feedsIndex');
    //增加浪浪地圖座標
    Route::get('create', 'FeedFrontController@feedsCreate');
});

//餵食表單狀態後端
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::resource('feed', 'FeedController');
    //餵食表單狀態
    Route::resource('feed_status', 'FeedStatusController');
    Route::post('delete_img', 'feedController@delete_img');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
