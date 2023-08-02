<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // CATEGORY
        DB::table('categories')->insert(
            [
                'name' => 'Quần',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Áo',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Giày',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Dép',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Tất',
            ]
        );
        // PRODUCT
        DB::table('products')->insert(
            [
                'name' => 'Áo 1',
                'price' => 30,
                'image' => 'Ảnh 1',
                'description' => 'Mô tả 1',
                'quantity' => 100,
                'category_id' => 2,
                'status' => 1,
                'brand_id' => 1,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Áo 2',
                'price' => 30,
                'image' => 'Ảnh 2',
                'description' => 'Mô tả 2',
                'quantity' => 100,
                'category_id' => 2,
                'status' => 1,
                'brand_id' => 2,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Áo 3',
                'price' => 30,
                'image' => 'Ảnh 3',
                'description' => 'Mô tả 3',
                'quantity' => 100,
                'category_id' => 3,
                'status' => 1,
                'brand_id' => 3,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Áo 4',
                'price' => 30,
                'image' => 'Ảnh 4',
                'description' => 'Mô tả 4',
                'quantity' => 100,
                'category_id' => 4,
                'status' => 1,
                'brand_id' => 4,
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Áo 5',
                'price' => 30,
                'image' => 'Ảnh 5',
                'description' => 'Mô tả 5',
                'quantity' => 100,
                'category_id' => 5,
                'status' => 0,
                'brand_id' => 5,
            ]
        );
        //SIZES
        DB::table('sizes')->insert(
            [
                'size' => 'S',
            ]
        );
        DB::table('sizes')->insert(
            [
                'size' => 'M',
            ]
        );
        DB::table('sizes')->insert(
            [
                'size' => 'L',
            ]
        );
        DB::table('sizes')->insert(
            [
                'size' => 'XL',
            ]
        );
        DB::table('sizes')->insert(
            [
                'size' => 'XXL',
            ]
        );
        //BRANDS
        DB::table('brands')->insert(
            [
                'name' => 'Nike',
            ]
        );
        DB::table('brands')->insert(
            [
                'name' => 'Adidas',
            ]
        );
        DB::table('brands')->insert(
            [
                'name' => 'T-dex',
            ]
        );
        DB::table('brands')->insert(
            [
                'name' => 'Essentinal',
            ]
        );
        DB::table('brands')->insert(
            [
                'name' => 'Pucci',
            ]
        );
        // USER
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'minh@gmail.com',
                'image' => 'Ảnh 1',
                'password' => bcrypt('minh'),
                'email_verified_at' => now(),
                'role_id' => 1,
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'minh1',
                'email' => 'minh1@gmail.com',
                'image' => 'Ảnh 2',
                'password' => bcrypt('minh1'),
                'email_verified_at' => now(),
                'role_id' => 0,
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'minh2',
                'email' => 'minh2@gmail.com',
                'password' => bcrypt('minh2'),
                'image' => 'Ảnh 3',
                'email_verified_at' => now(),
                'role_id' => 0,
            ]
        );
        // DB::table('orders')->insert(
        //     [
        //         'customerID' => '2',
        //         'date' => Carbon::now(),
        //     ]
        // );
        // DB::table('orders')->insert(
        //     [
        //         'customerID' => '3',
        //         'date' => Carbon::now(),
        //     ]
        // );
        // IMAGES
    }
}
