<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\User; // Import model User

class ExcelToDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Path ke file Excel
        $filePath = storage_path('app/public/data_seeder/data_user_seeder.xlsx');

        // Load spreadsheet
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();

        // Fetch data dari spreadsheet
        $rows = $sheet->toArray();

        // Skip header row
        $data = [];
        foreach ($rows as $index => $row) {
            if ($index == 0) continue; // skip header row

            $data[] = [
                'profile_picture' => config('app.avatar_generator_url').$row[0],
                'fullname' => $row[0],
                'email' => $row[1] . '@polimedia.ac.id',
                'password' => Hash::make('KomisiKOBR4'),
                'nim' => $row[1],
                'nik' => $row[3],
                'number_wa' => $row[2],
                'regional_campus' => $row[4],
                'edu_program' => $row[5],
                'user_type' => 'Mahasiswa',
                'status' => 'Aktif',
                'admin' => 'Tidak Aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Masukkan data ke dalam tabel users menggunakan model User
        User::insert($data);
    }
}
