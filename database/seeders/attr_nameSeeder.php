<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class attr_nameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ============ lang en ============================
        DB::table('Attribuites')->insert([
            'name' => 'Size',
            'slug'=>str::slug('Size')

        ]);
        // ===========
        DB::table('Attribuites')->insert([
            'name' => 'Color',
            'slug'=>str::slug('Color')

        ]);
        // ============
        DB::table('Attribuites')->insert([
            'name' => 'Brand',
            'slug'=>str::slug('Brand')

        ]);

        // ============ lang ar =============================

        DB::table('Attribuites')->insert([
            'name' => 'الحجم',
            'lang'=>'ar',
            'slug'=>str::slug('Size')

        ]);
        // ===========
        DB::table('Attribuites')->insert([
            'name' => 'الالوان',
            'lang'=>'ar',
            'slug'=>str::slug('Color')

        ]);
        // ============
        DB::table('Attribuites')->insert([
            'name' => 'العلامه التجاريه',
            'lang'=>'ar',
            'slug'=>str::slug('Brand')

        ]);

    }
}
