<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Áo 2',
                'price' => 30,
                'image' => 'Ảnh 2',
                'description' => 'Mô tả 2',
                'quantity' => 100,
                'category_id' => 1,
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
        //CUSTOMER
        DB::table('customers')->insert(
            [
                'name' => 'KH1',
                'email' => 'KH1@gmail.com',
                'password' => 'KH1password',
                'phone' => '01111',
                'age' => '11',
                'gender' => '1',
                'address' => 'KH1address',
            ]
        );
        DB::table('customers')->insert(
            [
                'name' => 'KH2',
                'email' => 'KH2@gmail.com',
                'password' => 'KH2password',
                'phone' => '02222',
                'age' => '22',
                'gender' => '2',
                'address' => 'KH2address',
            ]
        );
        DB::table('customers')->insert(
            [
                'name' => 'KH3',
                'email' => 'KH3@gmail.com',
                'password' => 'KH3password',
                'phone' => '03333',
                'age' => '33',
                'gender' => '1',
                'address' => 'KH3address',
            ]
        );
        DB::table('customers')->insert(
            [
                'name' => 'KH4',
                'email' => 'KH4@gmail.com',
                'password' => 'KH4password',
                'phone' => '04444',
                'age' => '44',
                'gender' => '2',
                'address' => 'KH4address',
            ]
        );
        DB::table('customers')->insert(
            [
                'name' => 'KH5',
                'email' => 'KH5@gmail.com',
                'password' => 'KH5password',
                'phone' => '05555',
                'age' => '55',
                'gender' => '1',
                'address' => 'KH5address',
            ]
        );
        //
    }
}
