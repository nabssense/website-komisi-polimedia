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
            'created_at' => '2023-06-07 16:24:01',
        ]);
        News::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Komisi Polimedia, BANGGA 2! ✊️',
            'content' => "Selamat kepada para pemenang PILMAPRES Polimedia tahun 2023!\n\nSemoga kedepannya KOMISI bisa mencetak lebih banyak lagi prestasi di kian hari 🎯🎯\n\nMembidik Prestasi, Membangun Negeri!",
            'image' => '["data_seeder/news/Prestasi 3.0.jpg","data_seeder/news/Prestasi 3.1.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Komisi Polimedia, BANGGA 2!'),
            'created_at' => '2023-05-07 16:24:01',
        ]);


        // PENCAIRAN
        News::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Pengumuman KIPK-UKT MABA Semester 1! ✊️',
            'content' => "Halo Sobat Komisi!\n\nKabar baik buat kita semua! Berikut ini nama-nama yang mendapatkan KIP-K UKT untuk mahasiswa baru semester 1✨. Untuk nama yang tertera, segera mengisi form ya! [https://bit.ly/KIPKPengganti2023](https://bit.ly/KIPKPengganti2023)\nJika ada yang ditanyakan, silahkan hubungi contact person yaa\n\nHanun (0813-1756-1799)\nSarah (0857-7452-6548)\n\n______\nKabinet Sancaka\nSatukan Aspirasi, Ciptakan Pandangan Terbuka",
            'image' => '["data_seeder/news/Pencairan 2.0.jpg","data_seeder/news/Pencairan 2.1.jpg","data_seeder/news/Pencairan 2.2.jpg","data_seeder/news/Pencairan 2.3.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Pengumuman KIPK-UKT MABA Semester 1! ✊️'),
            'created_at' => '2023-11-18 16:24:01',
        ]);
        News::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'KIP-K Merdeka ada 2 skema baru? Apa aja ya persyaratannya, ya?',
            'content' => 'Perlu diperhatikan bahwa saat ini terdapat 2 skema baru yang akan diterima oleh para calon penerima KIP-K 2023, lho.\n\nMunculnya kedua skema ini langsung menjadi isu hangat bagi para calon penerima KIP-K tahun ini.\n\nSupaya ga ketinggalan soal update terbaru KIP-K Merdeka 2023, kamu bisa baca lebih detail tentang pendaftaran KIP-K Merdeka dengan men-download pedoman pendaftaran KIP-K Merdeka 2023 di link berikut ini:\nbit.ly/KIPKMerdeka2023\n\nJadi gimana menurutmu tentang skema baru ini? Yuk komen di bawah!\n\nKabinet Sancaka\n𝘚𝘢𝘵𝘶𝘬𝘢𝘯 𝘈𝘴𝘱𝘪𝘳𝘢𝘴𝘪, 𝘊𝘪𝘱𝘵𝘢𝘬𝘢𝘯 𝘗𝘢𝘯𝘥𝘢𝘯𝘨𝘢𝘯 𝘛𝘦𝘳𝘣𝘶𝘬𝘢',
            'image' => '["data_seeder/news/Pencairan 2.0.jpg","data_seeder/news/Pencairan 2.1.jpg","data_seeder/news/Pencairan 2.2.jpg","data_seeder/news/Pencairan 2.3.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('KIP-K Merdeka ada 2 skema baru? Apa aja ya persyaratannya, ya?'),
            'created_at' => '2023-06-16 16:24:01',
        ]);



        // ACARA
        News::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'CREATIVE LEADER CAMP 9 HADIR! ✊️',
            'content' => "Kamu penasaran nggak, emangnya apa sih CLC itu 🤔? Yuk geser ke slide berikutnya!\n\nYang pasti, kita akan belajar dan berkarya bersama disana. Persiapkan dengan baik yaa 🤩\n\n______\nKabinet Sancaka\nSatukan Aspirasi, Ciptakan Pandangan Terbuka",
            'image' => '["data_seeder/news/Acara 2.0.jpg","data_seeder/news/Acara 2.1.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('CREATIVE LEADER CAMP 9 HADIR!'),
            'created_at' => '2023-11-29 16:24:01',
        ]);
        News::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Press Release mengenai kegiatan Open House Komisi 2023 yang diadakan pada hari Jumat tanggal 3 November 2023.',
            'content' => "Terima kasih kepada sobat komisi yang sudah mengikuti acara dari awal hingga selesai 🤩😊",
            'image' => '["data_seeder/news/Acara 1.0.jpg","data_seeder/news/Acara 1.1.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Press Release mengenai kegiatan Open House Komisi 2023 yang diadakan pada hari Jumat tanggal 3 November 2023.'),
            'created_at' => '2023-11-09 16:24:01',
        ]);


        
         // HARI PERINGATAN
         News::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Selamat ulang tahun yang ke-497 Kota Jakarta tercinta.',
            'content' => "Semoga semakin berkembang, selalu berbenah, semakin indah kotanya, dan semakin bahagia warganya.\n\nKabinet Harpiah 2024\nHadirkan Pikiran Wujudkan Harapan",
            'image' => '["data_seeder/news/Hari 1.0.jpg","data_seeder/news/Hari 1.1.jpg","data_seeder/news/Hari 1.2.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Selamat ulang tahun yang ke-497 Kota Jakarta tercinta.'),
            'created_at' => '2024-06-22 16:24:01',
        ]);
        
        News::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => '[HARI BANK INDONESIA]',
            'content' => "Sebagai bank sentral, Bank Indonesia (BI) mempunyai tujuan untuk mencapai dan memelihara kestabilan nilai rupiah, yaitu kestabilan nilai mata uang terhadap barang dan jasa domestik (inflasi), dan kestabilan terhadap mata uang negara lain (kurs). Yuk kita simak tentang sejarah awal terbentuknya perbankan di Indonesia!",
            'image' => '["data_seeder/news/Hari 2.0.jpg","data_seeder/news/Hari 2.1.jpg","data_seeder/news/Hari 2.2.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('[HARI BANK INDONESIA]'),
            'created_at' => '2024-07-06 16:24:01',
        ]);



           // KEPENGURUSAN
           News::create([
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'Filosofi Kabinet Harpiah 2024',
            'content' => "Logo dari Kabinet Harpiah adalah perwujudan dari Visi dan Misi kabinet Harpiah.\n\nBerikut adalah filosofinya 👐\n\nYuk geser ke kiri postingan, biar kita sama-sama tau maknanya!\n\nKabinet Harpiah 2024\n𝘏𝘢𝘥𝘪𝘳𝘬𝘢𝘯 𝘗𝘪𝘬𝘪𝘳𝘢𝘯 𝘞𝘶𝘫𝘶𝘥𝘬𝘢𝘯 𝘏𝘢𝘳𝘢𝘱𝘢𝘯",
            'image' => '["data_seeder/news/Kabinet 1.0.jpg","data_seeder/news/Kabinet 1.1.jpg","data_seeder/news/Kabinet 1.2.jpg","data_seeder/news/Kabinet 1.3.jpg","data_seeder/news/Kabinet 1.4.jpg"]',
            'headline_status' => 'Tidak Aktif',
            'headline_image' => '',
            'slug' => Str::slug('Filosofi Kabinet Harpiah 2024'),
            'created_at' => '2024-05-30 16:24:01',
        ]);
        

    }
}
