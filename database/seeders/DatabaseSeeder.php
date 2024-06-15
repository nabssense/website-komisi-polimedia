<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
       
        $fullname = 'Muhammad Nabil Musyaffa';
        $modifiedFullname = str_replace(' ', '%20', $fullname);
        
        \App\Models\User::factory()->create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => $fullname,
            'email' => 'nabil723@admin.com',
            'password' => 'nabil723',
            'nim'=> '20240090',
            'user_type' => 'Mahasiswa',
            'edu_program' => 'Teknologi Rekayasa Multimedia',
            'status' => 'Active',
        ]);

        \App\Models\User::factory()->create([
            'profile_picture' => config('app.avatar_generator_url').$modifiedFullname,
            'fullname' => $fullname,
            'email' => 'admin@ad',
            'password' => 'admin',
            'nim'=> '20240090',
            'user_type' => 'Mahasiswa',
            'edu_program' => 'Teknologi Rekayasa Multimedia',
            'status' => 'Active',
        ]);

        $this->call([
            CategoryDiscussionsSeeder::class,
        ]);
    }
}
