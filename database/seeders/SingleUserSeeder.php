<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SingleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'profile_picture' => 'https://example.com/path/to/profile-picture.jpg', // Ganti dengan URL atau path yang sesuai
            'fullname' => 'Muhammad Nabil Musyaffa',
            'email' => 'nabilmusyaffa7@gmail.com',
            'password' => 'KomisiKOBR4', // Pastikan password terenkripsi
            'nim' => '123456789',
            'nik' => '1234567890',
            'number_wa' => '089123456789',
            'regional_campus' => 'Jakarta',
            'edu_program' => 'D4 Teknologi Rekayasa Multimedia',
            'user_type' => 'Mahasiswa',
            'status' => 'Aktif',
            'admin' => 'Aktif',
        ]);
    }
}
