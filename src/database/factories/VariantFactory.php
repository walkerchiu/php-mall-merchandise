<?php

/** @var \Illuminate\Database\Eloquent\Factory  $factory */

use Faker\Generator as Faker;
use WalkerChiu\MallMerchandise\Models\Entities\Variant;
use WalkerChiu\MallMerchandise\Models\Entities\VariantLang;

$factory->define(Variant::class, function (Faker $faker) {
    return [
        'serial'     => $faker->isbn10,
        'identifier' => $faker->slug,
    ];
});

$factory->define(VariantLang::class, function (Faker $faker) {
    return [
        'code'  => $faker->locale,
        'key'   => $faker->randomElement(['name', 'description']),
        'value' => $faker->sentence,
    ];
});
