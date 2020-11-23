<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('type_accounts')->insert([
            [
                'name' => 'admin',
            ],
            [
                'name' => 'customer',
            ],
        ]);

        DB::table('accounts')->insert([
            [
                'name' => 'name admin',
                'email' => 'admin@gmail.com',
                'phone' => '0909090909',
                'type_account' => 1,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'customer 1',
                'email' => 'cus1@gmail.com',
                'phone' => '0909090901',
                'type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'customer 2',
                'email' => 'cus2@gmail.com',
                'phone' => '0909090902',
                'type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0909090903',
                'type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0909090904',
                'type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
        ]);

        DB::table('sizes')->insert([
            [
                'name' => 'S',
            ],
            [
                'name' => 'M',
            ],
            [
                'name' => 'L',
            ],
            [
                'name' => 'XL',
            ],
        ]);

        DB::table('colors')->insert([
            [
                'name' => 'pink',
            ],
            [
                'name' => 'yellow',
            ],
            [
                'name' => 'red',
            ],
            [
                'name' => 'green',
            ],
            [
                'name' => 'blue',
            ],
        ]);

        DB::table('genders')->insert([
            [
                'name' => 'man',
            ],
            [
                'name' => 'woman',
            ],
        ]);

        DB::table('models')->insert([
            [
                'name' =>  'Model1'
            ],
            [
                'name' => 'Model2'
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' =>  'nike'
            ],
            [
                'name' => 'adidas'
            ],
            [
                'name' => 'bitis'
            ],
        ]);
    }
}
