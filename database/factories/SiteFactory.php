<?php

use App\Site;
use Faker\Generator as Faker;

$factory->define(Site::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->word,
        'customer_id'   =>  1,
        'latitude'      =>  $faker->latitude($min = 42.11, $max = 46.00),
        'longitude'      =>  $faker->longitude($min = -123, $max = -117)
    ];
});
