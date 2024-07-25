<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoryNewsSeeder;
use Database\Seeders\PeriodFundingSeeder;
use Database\Seeders\CategoryDiscussionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       
        $fullname = 'Muhammad Nabil Musyaffa';
        $modifiedFullname = str_replace(' ', '%20', $fullname);
        
        User::create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => $fullname,
            'email' => 'nabil723@admin.com',
            'password' => 'nabil723',
            'nim'=> '723723723',
            'nik'=> '',
            'number_wa'=> '089503033804',
            'regional_campus'=> 'Jakarta',
            'edu_program' => 'D4 Teknologi Rekayasa Multimedia',
            'user_type' => 'Mahasiswa',
            'status' => 'Aktif',
            'admin' => 'Tidak Aktif',
        ]);

        User::create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => 'Muhammad Alif',
            'email' => 'admin@ad',
            'password' => 'admin723',
            'nim'=> '0',
            'nik'=> '',
            'number_wa'=> '089503033804',
            'regional_campus'=> 'Jakarta',
            'edu_program' => '',
            'user_type' => 'Admin',
            'status' => 'Aktif',
            'admin' => 'Aktif',
        ]);

        User::create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => 'Yuyun',
            'email' => 'yuyunkh@polimedia.ac.id',
            'password' => 'Buyuyunkh@polimedia.ac.id',
            'nim'=> '0',
            'nik'=> '',
            'number_wa'=> '089503033804',
            'regional_campus'=> 'Jakarta',
            'edu_program' => '',
            'user_type' => 'Admin',
            'status' => 'Aktif',
            'admin' => 'Aktif',
        ]);

        User::create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => 'Suhaili',
            'email' => 'Suhaili@gmail.com',
            'password' => 'Suhaili',
            'nim'=> '0',
            'nik'=> '',
            'number_wa'=> '089503033804',
            'regional_campus'=> '',
            'edu_program' => '',
            'user_type' => 'Pembina Komisi',
            'status' => 'Aktif',
            'admin' => 'Aktif',
        ]);


        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'Muhammad Alif',
        //     'email' => '20240082@polimedia.ac.id',
        //     'password' => '20240082',
        //     'nim'=> '0',
        //     'nik'=> '',
        //     'number_wa'=> '',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D4 Teknologi Rekayasa Multimedia',
        //     'user_type' => 'Admin',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);

        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'Rifki Herdandi',
        //     'email' => '21330095@polimedia.ac.id',
        //     'nim'=> '21330095',
        //     'nik'=> '',
        //     'number_wa'=> '089503033804',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D3 Periklanan',
        //     'password' => 'KomisiKOBR4',
        //     'user_type' => 'Mahasiswa',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);

        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'ASTRIANI DEVITASARI',
        //     'email' => '21330112@polimedia.ac.id',
        //     'nim'=> '21330112',
        //     'nik'=> '',
        //     'number_wa'=> '',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D3 Periklanan',
        //     'password' => 'KomisiKOBR4',
        //     'user_type' => 'Mahasiswa',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);

        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'Sabrina Choirunnisa',
        //     'email' => '21330099@polimedia.ac.id',
        //     'nim'=> '21330099',
        //     'nik'=> '',
        //     'number_wa'=> '',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D3 Periklanan',
        //     'password' => 'KomisiKOBR4',
        //     'user_type' => 'Mahasiswa',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);
        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'Dundi Ichsan Perlambang Utama',
        //     'email' => '21300040@polimedia.ac.id',
        //     'nim'=> '21300022',
        //     'nik'=> '',
        //     'number_wa'=> '',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D3 Penerbitan',
        //     'password' => 'KomisiKOBR4',
        //     'user_type' => 'Mahasiswa',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);
        // User::create([
        //     'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
        //     'fullname' => 'Aulia Choirunisa ',
        //     'email' => '20240032@polimedia.ac.id',
        //     'nim'=> '20240032',
        //     'nik'=> '',
        //     'number_wa'=> '',
        //     'regional_campus'=> 'Jakarta',
        //     'edu_program' => 'D4 Teknologi Rekayasa Multimedia',
        //     'password' => 'KomisiKOBR4',
        //     'user_type' => 'Mahasiswa',
        //     'status' => 'Aktif',
        //     'admin' => 'Tidak',
        // ]);
        

        $this->call([
            CategoryDiscussionsSeeder::class,
        ]);
        $this->call([
            CategoryNewsSeeder::class,
        ]);
        $this->call([
            PeriodFundingSeeder::class,
        ]);
        $this->call([
            TentangKomisi::class,
        ]);
        $this->call([
            ExcelToDatabaseSeeder::class,
        ]);
        $this->call([
            NewsSeeder::class,
        ]);
         // Panggil SingleUserSeeder
         $this->call([
            SingleUserSeeder::class,
        ]);
    }
}
