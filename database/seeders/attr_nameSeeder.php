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

    }
}
