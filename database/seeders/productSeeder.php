<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'product-1',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-1.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-1')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-2',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-2.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-2')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-3',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-3.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-3')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-4',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-4.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-4')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-5',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-5.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-5')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-6',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-6.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-6')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-7',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-7.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-7')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-8',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-8.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-8')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-9',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-9.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-9')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-10',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-10.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-10')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-11',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-11.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-11')

        ]);
        // =========
        DB::table('products')->insert([
            'name' => 'product-12',
            'desc'=>'Decription of the product Decription of the productDecription of the product',
            'image'=>'product-12.jpg',
            'price'=>rand(100,500),
            'sale'=>rand(10,70),
            'rate'=>rand(1,5),
            'quntity'=>rand(10,50),
            'descount_Type'=>rand(0,1),
            'attr_name_id'=>rand(1,3),
            'attr_value_id'=>rand(1,9),
            'categorie_id'=>rand(1,3),
            'slug'=>str::slug('product-12')

        ]);
        // =========
        // DB::table('products')->insert([
        //     'name' => '',
        //     'desc'=>'Decription of the product Decription of the productDecription of the product',
        //     'image'=>'product-12.jpg',
        //     'price'=>rand(100,500),
        //     'sale'=>rand(10,70),
        //     'rate'=>rand(1,5),
        //     'quntity'=>rand(10,50),
        //     'descount_Type'=>rand(0,1),
        //     'attr_name_id'=>rand(1,3),
        //     'attr_value_id'=>rand(1,9),
        //     'categorie_id'=>rand(1,3),
        //     'slug'=>str::slug('')

        // ]);
        // =========
    }
}
