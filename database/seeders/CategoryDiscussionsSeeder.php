<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDiscussionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories_discussions')->insert([
            
            [
                'slug' => 'berita-resmi',
                'name' => 'Berita Resmi',
            ],
            [
                'slug' => 'pencairan',
                'name' => 'Pencairan',
            ],
            [
                'slug' => 'acara-komisi',
                'name' => 'Acara KOMISI',
            ],
            [
                'slug' => 'kepengurusan',
                'name' => 'Kepengurusan',
            ],
            [
                'slug' => 'prestasi',
                'name' => 'Prestasi',
            ],
            [
                'slug' => 'permasalahan',
                'name' => 'Permasalahan',
            ],
        ]);
    }
}
