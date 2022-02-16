<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class attr_valueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ====== color ==================
        DB::table('attribuite_values')->insert([
            'name' => 'Red',
            'attribuite_id' => 2,
            'slug'=>str::slug('Red')

        ]);

        DB::table('attribuite_values')->insert([
            'name' => 'Green',
            'attribuite_id' => 2,
            'slug'=>str::slug('Green')

        ]);

        DB::table('attribuite_values')->insert([
            'name' => 'blue',
            'attribuite_id' => 2,
            'slug'=>str::slug('blue')

        ]);
         // ========== size ========
         DB::table('attribuite_values')->insert([
            'name' => 'Tiny',
            'attribuite_id' => 1,
            'slug'=>str::slug('Tiny')

        ]);

         DB::table('attribuite_values')->insert([
            'name' => 'Large',
            'attribuite_id' => 1,
            'slug'=>str::slug('Large')

        ]);

         DB::table('attribuite_values')->insert([
            'name' => 'Medium',
            'attribuite_id' => 1,
            'slug'=>str::slug('Medium')

        ]);
         // ====== BRAND ============
         DB::table('attribuite_values')->insert([
            'name' => 'Elhalal',
            'attribuite_id' => 3,
            'slug'=>str::slug('')

        ]);

    }
}// end class
