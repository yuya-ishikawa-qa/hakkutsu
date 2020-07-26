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

// ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// マイページ
Route::get('mypage', 'MypageController@index')->name('mypage.index');
Route::get('mypage/edit', 'MypageController@edit')->name('mypage.edit');
Route::post('mypage/edit', 'MypageController@edit')->name('mypage.edit');
Route::get('mypage/destroy', 'MypageController@destroy')->name('mypage.destroy');
Route::delete('mypage/destroy', 'MypageController@destroy')->name('mypage.destroy');



// 8-2表示用
Route::get('/store/management/request', function () {
    return view('store.management.request');
})->name('store.request');


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
Route::get('/stores', 'StoresController@index')->name('stores.index');
Route::resource('/stores', 'StoresController');

//商品関連
//一覧表示
Route::get('/items', 'ItemsController@index');
Route::resource('/items', 'ItemsController');

//レビュー関連
Route::get('/reviews', 'ReviewsController@index');
Route::resource('/reviews', 'ReviewsController');



Auth::routes();
 
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});