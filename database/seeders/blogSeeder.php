<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'name' => '6 ways to prepare breakfast for 30',
            'image' => 'blog-1.jpg',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'comment'=>'comments comments comments',
            'slug'=>str::slug('6 ways to prepare breakfast for 30')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'Visit the clean farm in the US',
            'image' => 'blog-2.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'slug'=>str::slug('Visit the clean farm in the US')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'Cooking tips make cooking simple',
            'image' => 'blog-3.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'Cooking tips make cooking simple',
            'image' => 'blog-4.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'The Moment You Need To Remove Garlic From The Menu',
            'image' => 'blog-5.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'slug'=>str::slug('The Moment You Need To Remove Garlic From The Menu')

        ]);
        DB::table('blogs')->insert([
            'name' => 'Cooking tips make cooking simple',
            'image' => 'blog-6.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);

        // =================== lang ar ==========================
        DB::table('blogs')->insert([
            'name' => ' طرق لتحضير الفطور لـ30',
            'lang'=>'ar',
            'image' => 'blog-1.jpg',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'comment'=>'comments comments comments',
            'slug'=>str::slug('6 ways to prepare breakfast for 30')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'قم بزيارة المزرعة النظيفة في الولايات المتحدة',
            'lang'=>'ar',
            'image' => 'blog-2.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'slug'=>str::slug('Visit the clean farm in the US')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'نصائح الطبخ تجعل الطبخ بسيطًا',
            'lang'=>'ar',
            'image' => 'blog-3.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'نصائح الطبخ تجعل الطبخ بسيطًا',
            'lang'=>'ar',
            'image' => 'blog-4.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);
        //  =================
        DB::table('blogs')->insert([
            'name' => 'اللحظة التي تحتاجها لإزالة الثوم من القائمة',
            'lang'=>'ar',
            'image' => 'blog-5.jpg',
            'comment'=>'التعليق الخاص بالمقال ',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'slug'=>str::slug('The Moment You Need To Remove Garlic From The Menu')

        ]);
        DB::table('blogs')->insert([
            'name' => 'نصائح الطبخ تجعل الطبخ بسيطًا',
            'lang'=>'ar',
            'image' => 'blog-6.jpg',
            'comment'=>'comments comments comments',
            'desc'=>'ولكن لأنه لا توجد أوقات كهذه أبدًا قد يطلب فيها بعض المخاض والألم العظيمين',
            'slug'=>str::slug('Cooking tips make cooking simple')

        ]);
    }
}
