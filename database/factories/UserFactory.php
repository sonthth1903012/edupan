<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone' => $faker->phoneNumber,
        'address'=> $faker->address,
    ];
});

$factory->define(\App\Category::class,function (Faker $faker){
    return [
        'category_name' => $faker->unique()->name
    ];
});

$factory->define(\App\Post::class,function (Faker $faker){
    return [
        'title' => $faker->jobTitle,
        'author'=> $faker->name,
        'content'=> $faker->realText(),
        'shortDesc'=> $faker->text,
        'thumbnail'=> "https://source.unsplash.com/random/200x200?sig=".random_int(1,1000),
        'category_id'=> random_int(1,3),
        'user_id' => random_int(1,3),
    ];
});

$factory->define(\App\Comment::class,function (Faker $faker){
    return [
        'content'=> $faker->text,
        'user_id'=> random_int(1,5),
        'post_id'=> random_int(1,5)
    ];
});

