<?php

// Home
Breadcrumbs::for('/', function ($trail) {
    $trail->push('ホーム', url('/'));
});

// Home > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('/');
    $trail->push('お問い合わせ', url('contact'));
});

// Home > Stores
Breadcrumbs::for('stores', function ($trail) {
    $trail->parent('/');
    $trail->push('店舗一覧', url('stores'));
});

// Home > Stores > StoresDetail
Breadcrumbs::for('stores/{id}', function ($trail) {
    $trail->parent('/');
    $trail->push('店舗一覧', url('stores'));
    $trail->push('店舗詳細', url('stores/{id}'));
});

// Home > Items
Breadcrumbs::for('items', function ($trail) {
    $trail->parent('/');
    $trail->push('商品一覧', url('items'));
});

// Home > Items > ItemsDetail
Breadcrumbs::for('items/{id}', function ($trail) {
    $trail->parent('/');
    $trail->push('商品一覧', url('items'));
    $trail->push('商品詳細', url('items/{id}'));
});

// Home > Reviews
Breadcrumbs::for('reviews', function ($trail) {
    $trail->parent('/');
    $trail->push('商品レビュ一覧', url('reviews'));
});

// Home > Reviews > ReviewsDetail
Breadcrumbs::for('reviews/{id}', function ($trail) {
    $trail->parent('/');
    $trail->push('商品レビュ一覧', url('reviews'));
    $trail->push('商品レビュー詳細', url('reviews/{id}'));
});

// Home > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
});

// Home > Users > Edit
Breadcrumbs::for('users/edit', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('会員登録内容の変更', url('users/edit'));
});

// Home > Users > OrderList
Breadcrumbs::for('users/orderList', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('注文履歴', url('users/orderList'));
});

// Home > Users > OrderList > OrdersDetails
Breadcrumbs::for('users/ordersDetails', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('注文履歴', url('users/orderList'));
    $trail->push('注文詳細', url('users/ordersDetails'));
});

// Home > Users > Delete_confirm
Breadcrumbs::for('users/delete_confirm', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('退会手続き', url('users/delete_confirm'));
});

// Home > Users > Store/management/request
Breadcrumbs::for('store/management/request', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('出店依頼', url('store/management/request'));
});

// Home > Users > Store/management/request > Stores/management
Breadcrumbs::for('stores/management', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('出店依頼', url('store/management/request'));
    $trail->push('店舗管理', url('stores/management'));
});

// Home > Users > Store/management/request > Stores/create
Breadcrumbs::for('stores/create', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('出店依頼', url('store/management/request'));
    $trail->push('店舗登録', url('stores/create'));
});

// Home > Users > Store/management/request > Stores/create
Breadcrumbs::for('stores/edit', function ($trail) {
    $trail->parent('/');
    $trail->push('マイページ', url('users'));
    $trail->push('出店依頼', url('store/management/request'));
    $trail->push('店舗管理', url('stores/management'));
    $trail->push('店舗編集', url('stores/edit'));
});
