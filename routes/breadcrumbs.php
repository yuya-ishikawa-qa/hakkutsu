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
