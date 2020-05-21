<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@company.com',
            'name' => 'admin',
            'email_verified_at' => '2020-1-1 23:59:59',
            'password' => Hash::make('12345678'),
            'role' => '2',
            'phone'=> '0123456789',
            'address' => "Ha Noi"
        ]);

        DB::table("category")->insert([
            'category_name' => 'WORKSHOP'
        ]);

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
