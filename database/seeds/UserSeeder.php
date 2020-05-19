<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,5)->create();
        factory(\App\Category::class,5)->create();
        factory(\App\Post::class,10)->create();
//        factory(\App\Comment::class,15)->create();
//        factory(\App\School::class,6)->create();
    }
}
