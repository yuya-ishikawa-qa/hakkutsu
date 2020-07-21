<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'title' => '野菜が美味しい',
        'body' => '野菜が甘くて、野菜嫌いの子供も食べることができました！継続的にお取り寄せしたいと思います。',
    ];
});
