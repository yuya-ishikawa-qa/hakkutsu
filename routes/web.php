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

// トップページ
Route::get('/', function () {
    return view('toppage');
});

// ユーザー登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup/confirm','StoresController@confirm')->name('signup.confirm');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// マイページ関連
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'store', 'edit', 'update', 'destroy']]);
    Route::get('users/edit', 'UsersController@edit')->name('users.edit');
    Route::get('delete_confirm', 'UsersController@delete_confirm')->name('users.delete_confirm');
    Route::delete('users/destroy', 'UsersController@destroy')->name('users.destroy');
});


//りょうた作成
// 8-2表示用
Route::get('/store/management/request', function () {
    return view('store.management.request');
})->name('store.request');

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
    Route::resource('stores', 'StoresController', ['only' => ['create','store', 'destroy','edit','update']]);
    Route::get('/stores/management', 'StoresController@management')->name('stores.management');
    Route::get('/stores/itemlist/{id}', 'StoresController@itemlist')->name('stores.itemlist');
    Route::post('stores/confirm','StoresController@confirm')->name('stores.confirm');
});

//item作成、削除
Route::group(['middleware' => 'auth'], function () {
    Route::resource('items', 'ItemsController', ['only' => ['store']]);
    Route::get('/items/create/{store_id}', 'ItemsController@create')->name('items.create');
    Route::post('/items/confirm/{store_id}','ItemsController@confirm')->name('items.confirm');
    Route::get('/items/edit/{store_id}/{item_id}', 'ItemsController@edit')->name('items.edit');
    Route::put('items/update/{store_id}/{item_id}', 'ItemsController@update')->name('items.update');
    Route::delete('/items/destroy/{store_id}/{item_id}', 'ItemsController@destroy')->name('items.destroy');
});
//←りょうた作成

//お問い合わせ関連
//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');
//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactController@complete')->name('contact.complete');

//お店関連
//一覧表示
Route::get('/stores', 'StoreDisplayController@index')->name('stores.index');
Route::get('stores/{id}', 'StoreDisplayController@show')->name('stores.detail');

//商品関連
//一覧表示
Route::get('/items', 'ItemsDisplayController@index')->name('items.index');
Route::get('items/{id}', 'ItemsDisplayController@show')->name('items.detail');
// Route::resource('/items', 'ItemsDisplayController');
//↑Itemscontrollerとぶつかったのでコメントアウトしました

//レビュー関連
Route::group(['middleware' => 'auth'], function () {
    Route::resource('reviews', 'ReviewsController', ['only' => ['index','create','store','show','destroy']]);
});
