<?php

namespace Database\Seeders;

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
        DB::table('user')->insert([[
            'name' => 'nico',
            'email' => 'nico@gmail.com',
            'phone' => '1154443888',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'fer',
            'email' => 'fer@gmail.com',
            'phone' => '1154443388',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'manu',
            'email' => 'manu@gmail.com',
            'phone' => '1154243888',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'yae',
            'email' => 'yae@gmail.com',
            'phone' => '1151343888',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        DB::table('category')->insert([[
            'name' => 'Sports',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Finance',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Movies',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        DB::table('channel')->insert([[
            'name' => 'SMS',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'E-mail',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Push',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        DB::table('user_category')->insert([[
            'user_id' => 1,
            'category_id' => 1
        ], [
            'user_id' => 1,
            'category_id' => 2
        ], [
            'user_id' => 1,
            'category_id' => 3
        ], [
            'user_id' => 2,
            'category_id' => 1
        ], [
            'user_id' => 3,
            'category_id' => 3
        ], [
            'user_id' => 4,
            'category_id' => 1,
        ], [
            'user_id' => 4,
            'category_id' => 3
        ]]);

        DB::table('user_channel')->insert([[
            'user_id' => 1,
            'channel_id' => 1,
        ], [
            'user_id' => 1,
            'channel_id' => 2,
        ], [
            'user_id' => 1,
            'channel_id' => 3,
        ], [
            'user_id' => 2,
            'channel_id' => 1,
        ], [
            'user_id' => 3,
            'channel_id' => 3,
        ], [
            'user_id' => 4,
            'channel_id' => 1,
        ], [
            'user_id' => 4,
            'channel_id' => 3,
        ]]);
    }
}
