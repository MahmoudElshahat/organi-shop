<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Categorie;

class categoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Fresh Meat',
            'image' => 'cat-1.jpg',
            'slug'=>str::slug('Fresh Meat')

        ]);

        DB::table('categories')->insert([
            'name' => 'Oetmeal',
            'image' => 'cat-2.jpg',
            'slug'=>str::slug('Oetmeal')

        ]);

        DB::table('categories')->insert([
            'name' => 'FastFood',
            'image' => 'cat-3.jpg',
            'slug'=>str::slug('FastFood')

        ]);
        // ============ lang ar =====================
        DB::table('categories')->insert([
            'name' => 'اللحوم الطازجه',
            'lang'=>'ar',
            'image' => 'cat-1.jpg',
            'slug'=>str::slug('Fresh Meat')

        ]);

        DB::table('categories')->insert([
            'name' => 'دقيق الشوفان',
            'lang'=>'ar',
            'image' => 'cat-2.jpg',
            'slug'=>str::slug('Oetmeal')

        ]);

        DB::table('categories')->insert([
            'name' => 'الوجبات السريعه',
            'lang'=>'ar',
            'image' => 'cat-3.jpg',
            'slug'=>str::slug('FastFood')

        ]);
    }
}
