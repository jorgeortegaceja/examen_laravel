<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    return [
        'domicilio' => $faker->streetAddress(),
        'numero_exterior' =>  $faker->buildingNumber(),
        'cp' => $faker->postcode(),
        'ciudad' => $faker->city(),
        'colonia' => $faker->citySuffix(),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});