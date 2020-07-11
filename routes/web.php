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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('auth.register');
});
// 8-2表示用
Route::get('/store/management/request', function () {
    return view('store.management.request');
});


// 8-3表示用
Route::get('/store/management/createstore', function () {
    return view('store.management.createstore');
});
// 8-4表示用
Route::get('/store/management/confirmation', function () {
    return view('store.management.confirmation');
});

// 8-5表示用
Route::get('/store/management/index', function () {
    return view('store.management.index');
});

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
