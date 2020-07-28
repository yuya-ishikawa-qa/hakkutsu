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

// ユーザ登録フォーム
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
// ユーザ登録機能
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログインフォーム
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// ログイン機能
Route::post('login', 'Auth\LoginController@login')->name('login.post');
// ログアウト機能
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {

    return view('toppage');
});


//りょうた作成
// 8-2表示用
Route::get('/store/management/request', function () {
    return view('store.management.request');
});
// 9-1表示用
Route::get('/cart/index', function () {
    return view('cart.index');
});
// 9-2表示用
Route::get('/cart/delivery', function () {
    return view('cart.delivery');
});
// 9-3表示用
Route::get('/buy/index', function () {
    return view('buy.index');
});
// 7-1表示用
Route::get('/privacy', function () {
    return view('privacy');
});
//stores用
Route::group(['middleware' => 'auth'], function () {
    Route::resource('stores', 'StoresController', ['only' => ['create','store', 'destroy','edit','update']]);
    Route::get('/stores/management', 'StoresController@management');
    Route::post('stores/confirm','StoresController@confirm')->name('stores.confirm');
    // Route::post('stores/management/confirmation2','StoresController@confirm2')->name('stores.confirm2');
});
//←りょうた作成

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('users/show', 'UsersController@show')->name('users.show');
Route::get('users/destroy', 'UsersController@destroy')->name('users.destroy');
Route::delete('users/destroy', 'UsersController@destroy')->name('users.destroy');

//お問い合わせ関連
//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');
//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactController@complete')->name('contact.complete');

//お店関連
//一覧表示
Route::get('/stores', 'StoresController@index');
Route::resource('/stores', 'StoresController');

//商品関連
//一覧表示
Route::get('/items', 'ItemsController@index');
Route::resource('/items', 'ItemsController');

//レビュー関連
Route::get('/reviews', 'ReviewsController@index');
Route::resource('/reviews', 'ReviewsController');