<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Prestasi
        News::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Komisi Polimedia, BANGGA!',
            'content' => "Selamat kepada @harislegowo yang telah berhasil meraih Juara 1 lomba Musabaqah Tilawatil Qur'an (MTQ) Politeknik Tingkat Nasional yang dilaksanakan Politeknik Pertanian Negeri Pangkajane Kepulauan, mewakili kampus Polimedia untuk Ceramah Putra kategori mumtaz. 🫡🥳\n\nSemangat dan sukses untuk goals kedepannya ya, Kak Gowo!\n\nBersama Komisi, Menjadi yang Berprestasi!\n______\nKabinet Sancaka 𝘚𝘢𝘵𝘶𝘬𝘢𝘯 𝘈𝘴𝘱𝘪𝘳𝘢𝘴𝘪, 𝘊𝘪𝘱𝘵𝘢𝘬𝘢𝘯 𝘗𝘢𝘯𝘥𝘢𝘯𝘨𝘢𝘯 𝘛𝘦𝘳𝘣𝘶𝘬𝘢",
            'image' => '["data_seeder/news/Prestasi 1.0.jpg","data_seeder/news/Prestasi 1.1.jpg","data_seeder/news/Prestasi 1.2.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Komisi Polimedia, BANGGA!'),
        ]);

        // PILMAPRES
        News::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Komisi Polimedia, BANGGA 2! ✊️',
            'content' => "Selamat kepada para pemenang PILMAPRES Polimedia tahun 2023!\n\nSemoga kedepannya KOMISI bisa mencetak lebih banyak lagi prestasi di kian hari 🎯🎯\n\nMembidik Prestasi, Membangun Negeri!",
            'image' => '["data_seeder/news/Prestasi 3.0.jpg","data_seeder/news/Prestasi 3.1.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Komisi Polimedia, BANGGA 2!'),
        ]);

        // KIPK-UKT MABA Semester 1
        News::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Pengumuman KIPK-UKT MABA Semester 1! ✊️',
            'content' => "Halo Sobat Komisi!\n\nKabar baik buat kita semua! Berikut ini nama-nama yang mendapatkan KIP-K UKT untuk mahasiswa baru semester 1✨. Untuk nama yang tertera, segera mengisi form ya! [https://bit.ly/KIPKPengganti2023](https://bit.ly/KIPKPengganti2023)\nJika ada yang ditanyakan, silahkan hubungi contact person yaa\n\nHanun (0813-1756-1799)\nSarah (0857-7452-6548)\n\n______\nKabinet Sancaka\nSatukan Aspirasi, Ciptakan Pandangan Terbuka",
            'image' => '["data_seeder/news/Pencairan 2.0.jpg","data_seeder/news/Pencairan 2.1.jpg","data_seeder/news/Pencairan 2.2.jpg","data_seeder/news/Pencairan 2.3.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Pengumuman KIPK-UKT MABA Semester 1! ✊️'),
        ]);

        // CLC 9
        News::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'CREATIVE LEADER CAMP 9 HADIR! ✊️',
            'content' => "Kamu penasaran nggak, emangnya apa sih CLC itu 🤔? Yuk geser ke slide berikutnya!\n\nYang pasti, kita akan belajar dan berkarya bersama disana. Persiapkan dengan baik yaa 🤩\n\n______\nKabinet Sancaka\nSatukan Aspirasi, Ciptakan Pandangan Terbuka",
            'image' => '["data_seeder/news/Acara 2.0.jpg","data_seeder/news/Acara 2.1.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('CREATIVE LEADER CAMP 9 HADIR!'),
        ]);
    }
}
