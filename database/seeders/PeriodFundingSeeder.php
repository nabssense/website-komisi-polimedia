<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\PeriodFunding;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodFundingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PeriodFunding::create([
            'image' => ('img/pengajuan_pencairan/Default-Image-Null.png'),
            'name' => 'Ganjil 2024/2025',
            'start_date' => '2024-01-01 20:16:54',
            'end_date' => '2024-12-31 20:16:54',
            'slug' => Str::slug('Ganjil 2024/2025'),
        ]);

        PeriodFunding::create([
            'image' => ('img/pengajuan_pencairan/Default-Image-Null.png'),
            'name' => 'Genap 2024/2025',
            'start_date' => '2025-01-01 20:16:54',
            'end_date' => '2025-12-31 20:16:54',
            'slug' => Str::slug('Genap 2024/2025'),
        ]);
    }
}
