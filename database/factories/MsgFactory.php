<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Msg::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'msg' => $faker->text,
        'image' => ""
    ];
});
