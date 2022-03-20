<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metas')->insert([
            'meta_title' => 'index title',
            'meta_keywords' => ' index keywords',
            'meta_description' => 'index description',
            'page' => 'index',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'help title',
            'meta_keywords' => ' help keywords',
            'meta_description' => 'help description',
            'page' => 'help',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'deals title',
            'meta_keywords' => ' deals keywords',
            'meta_description' => 'deals description',
            'page' => 'deals',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'articles title',
            'meta_keywords' => ' articles keywords',
            'meta_description' => 'articles description',
            'page' => 'articles',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'organisations title',
            'meta_keywords' => ' organisations keywords',
            'meta_description' => 'organisations description',
            'page' => 'organisations',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'about title',
            'meta_keywords' => ' about keywords',
            'meta_description' => 'about description',
            'page' => 'about',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'vacancy title',
            'meta_keywords' => ' vacancy keywords',
            'meta_description' => 'vacancy description',
            'page' => 'vacancy',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'smi title',
            'meta_keywords' => ' smi keywords',
            'meta_description' => 'smi description',
            'page' => 'smi',
        ]);

        DB::table('metas')->insert([
            'meta_title' => 'patients title',
            'meta_keywords' => ' patients keywords',
            'meta_description' => 'patients description',
            'page' => 'patients',
        ]);
    }
}
