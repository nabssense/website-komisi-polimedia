<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TentangKomisi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('about_komisi')->insert([
            [
                'logo' => ('img/komisi_polimedia/Logo-Komisi.svg'),
                'name' => 'Komunitas BidikMisi Polimedia',
                'slogan' => 'Membidik Prestasi Membangun Negeri',
                'description' => 'Komisi ialah dskandksandaskndsajkdasjkdbasjkd',
                'logo_cabinet' => ('img/komisi_polimedia/Logo-Kabinet-Kobra.svg'),
            ],
        ]);
    }
}
