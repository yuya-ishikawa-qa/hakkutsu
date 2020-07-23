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

//トップページ
Route::get('/', function () {
    return view('toppage');
});


//ユーザー新規登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('users/show', 'UsersController@show')->name('users.show');
Route::get('users/destroy', 'UsersController@destroy')->name('users.destroy');
Route::delete('users/destroy', 'UsersController@destroy')->name('users.destroy');


Auth::routes();
//ユーザーログイン
Route::group(['prefix' => 'user'], function(){
    Route::get('home', 'UserHomeController@index')->name('user_auth.home');
    Route::get('login', 'UserAuth\LoginController@showLoginForm')->name('user_auth.login');
    Route::post('login', 'UserAuth\LoginController@login')->name('user_auth.login');
    Route::post('logout', 'UserAuth\LoginController@logout')->name('user_auth.logout');
    Route::get('register', 'UserAuth\RegisterController@showRegisterForm')->name('user_auth.register');
    Route::post('register', 'UserAuth\RegisterController@register')->name('user_auth.register');
});
//管理者ログイン
Route::group(['prefix' => 'admin'], function(){
    Route::get('home', 'AdminHomeController@index')->name('admin_auth.home');
    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin_auth.login');
    Route::post('login', 'AdminAuth\LoginController@login')->name('admin_auth.login');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin_auth.logout');
    Route::get('register', 'AdminAuth\RegisterController@showRegisterForm')->name('admin_auth.register');
    Route::post('register', 'AdminAuth\RegisterController@register')->name('admin_auth.register');
});
Route::get('/home', 'HomeController@index')->name('home');


// 8-2表示用
Route::get('/store/management/request', function () {
    return view('store.management.request');
});


// 8-3表示用
// Route::get('/store/management/create', function () {
//     return view('store.management.create');
// });
Route::group(['middleware' => 'auth'], function () {
    Route::get('/store/management/create', 'StoresController@create');
});

// 8-4表示用
Route::get('/store/management/confirmation', function () {
    return view('store.management.confirmation');
});

// 8-5表示用(storeデータ表示)
Route::get('/store/management/index', 'StoresController@index');

// 8-6表示用
Route::get('/store/management/createitem', function () {
    return view('store.management.createitem');
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

//store作成、削除
Route::group(['middleware' => 'auth'], function () {
    Route::resource('stores', 'StoresController', ['only' => ['create', 'store', 'destroy']]);
});

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
