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
                'id_type_account' => 1,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'customer 1',
                'email' => 'cus1@gmail.com',
                'phone' => '0909090901',
                'id_type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'customer 2',
                'email' => 'cus2@gmail.com',
                'phone' => '0909090902',
                'id_type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0909090903',
                'id_type_account' => 2,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0909090904',
                'id_type_account' => 2,
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

        DB::table('products')->insert([
            [
                'name'=> 'giay 1',
                'id_brand' => 1,
                'id_model' => 1,
                'description' => 'des',
            ],
            [
                'name'=> 'giay 2',
                'id_brand' => 2,
                'id_model' => 2,
                'description' => 'des',
            ],
            [
                'name'=> 'giay 3',
                'id_brand' => 3,
                'id_model' => 1,
                'description' => 'des',
            ],
        ]);

        DB::table('product_catalogs')->insert([
            [
                'name' => 'Catalog 1',
                'id_gender' => 1,
            ],
            [
                'name' => 'Catalog 2',
                'id_gender' => 1,
            ],
            [
                'name' => 'Catalog 3',
                'id_gender' => 2,
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'id_product' => 1,
                'cost' => 200,
                'price' => 300,
                'id_color' => 1,
                'id_size' => 2,
                'id_product_cata' => 1,
            ],
            [
                'id_product' => 1,
                'cost' => 200,
                'price' => 320,
                'id_color' => 2,
                'id_size' => 3,
                'id_product_cata' => 1,
            ],
            [
                'id_product' => 2,
                'cost' => 200,
                'price' => 300,
                'id_color' => 1,
                'id_size' => 2,
                'id_product_cata' => 2,
            ],
            [
                'id_product' => 2,
                'cost' => 200,
                'price' => 300,
                'id_color' => 1,
                'id_size' => 2,
                'id_product_cata' => 2,
            ],
            [
                'id_product' => 3,
                'cost' => 200,
                'price' => 300,
                'id_color' => 1,
                'id_size' => 2,
                'id_product_cata' => 3,
            ],
        ]);

        DB::table('orders')->insert([
            [
                'id_account' => 2,
                'address' => Str::random(10),
                // 'total_amount' => 500,
                'status' => true,
            ],
            [
                'id_account' => 3,
                'address' => Str::random(10),
                // 'total_amount' => 300,
                'status' => true,
            ],
        ]);

        DB::table('order_details')->insert([
            [
                'id_product_detail' => 1,
                'id_order' => 1,
                'number' => 2,
            ],
            [
                'id_product_detail' => 2,
                'id_order' => 1,
                'number' => 1,
            ],
            [
                'id_product_detail' => 3,
                'id_order' => 2,
                'number' => 2,
            ],
        ]);
    }
}
