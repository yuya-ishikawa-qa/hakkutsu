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

// 新規登録フォーム
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('signup/edit', 'Auth\RegisterController@edit')->name('signup.edit');


// ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// マイページ
Route::get('mypage/index', 'MypageController@index')->name('mypage.index');
Route::get('mypage/show', 'MypageController@show')->name('mypage.show');
Route::get('mypage/edit', 'MypageController@edit')->name('mypage.edit');
Route::post('mypage/edit', 'MypageController@edit')->name('mypage.edit');
Route::get('mypage/destroy', 'MypageController@destroy')->name('mypage.destroy');
Route::delete('mypage/destroy', 'MypageController@destroy')->name('mypage.destroy');


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
// 特定商取引法
Route::get('/law', function () {
    return view('law');
});

//store作成、削除
Route::group(['middleware' => 'auth'], function () {
    Route::resource('stores', 'StoresController', ['only' => ['create','store', 'destroy','edit','update']]);
    Route::get('/stores/management', 'StoresController@management')->name('stores.management');
    Route::get('/stores/{id}/itemlist', 'StoresController@itemlist')->name('stores.itemlist');
    Route::post('stores/confirm','StoresController@confirm')->name('stores.confirm');
    // Route::get('/stores/{id}/createitem', 'StoresController@createitem')->name('stores.createitem');
});

//item作成、削除
Route::group(['middleware' => 'auth'], function () {
    Route::resource('items', 'ItemsController', ['only' => ['store', 'destroy','update']]);
    Route::get('/stores/{id}/items/create', 'ItemsController@create')->name('items.create');
    Route::post('/stores/{id}/items/confirm','ItemsController@confirm')->name('items.confirm');
    Route::get('/stores/{id1}/items/{id2}/edit', 'ItemsController@edit')->name('items.edit');
    Route::put('/stores/{id1}/items/{id2}/update', 'ItemsController@update')->name('items.update');
});
//←りょうた作成

//認証関連
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
Route::get('/stores', 'StoreDisplayController@index')->name('stores.index');
Route::get('stores/{id}', 'StoreDisplayController@show')->name('stores.detail');
// Route::resource('/stores', 'StoreDisplayController');
//↑storescontrollerとぶつかったのでコメントアウトしました

//商品関連
//一覧表示
Route::get('/items', 'ItemsDisplayController@index')->name('items.index');
Route::get('items/{id}', 'ItemsDisplayController@show')->name('items.detail');
// Route::resource('/items', 'ItemsDisplayController');
//↑Itemscontrollerとぶつかったのでコメントアウトしました

//レビュー関連
Route::resource('/reviews', 'ReviewsController');

Route::get('/reviews', 'ReviewsController@index')->name('reviews.index');
Route::get('/reviews/{id}', 'ReviewsController@show')->name('reviews.show');

