<?php

use Faker\Generator as Faker;
use App\User;
use App\Board;

$factory->define(App\Comment::class, function (Faker $faker) {
    $minId = User::min('id');
    $maxId = User::max('id');
    $minBId = Board::min('id');
    $maxBId = Board::max('id');

    return [
        'content' => $faker->sentence,
        'board_id' => $faker->numberBetween($minBId, $maxBId),
        'user_id' => $faker->numberBetween($minId, $maxId),
    ];
});
