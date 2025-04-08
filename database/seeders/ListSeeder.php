<?php

namespace Database\Seeders;

use App\Models\ListModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'title' => 'Persiapan Lomba Web Technologies',
                'description' => 'Checklist semua kebutuhan teknis dan non-teknis untuk menghadapi LKS tingkat provinsi. Termasuk latihan soal dan revisi portfolio.',
                'status' => 'in_progress',
                'priority' => 'high',
                'user_id' => 1,
                'created_at' => '2025-02-12 09:30:00',
                'updated_at' => '2025-02-14 10:00:00'
            ],
            [
                'title' => 'Rencana Konten Website Pribadi',
                'description' => 'Merancang struktur halaman, konten bio, galeri proyek, dan integrasi GitHub.',
                'status' => 'in_progress',
                'priority' => 'medium',
                'user_id' => 1,
                'created_at' => '2025-03-01 08:45:00',
                'updated_at' => '2025-03-03 11:15:00'
            ],
            [
                'title' => 'To-do Gereja: Acara Pemuda',
                'description' => 'Koordinasi pembicara, desain poster, dan persiapan rundown untuk acara komunitas pemuda bulan Maret.',
                'status' => 'done',
                'priority' => 'high',
                'user_id' => 1,
                'created_at' => '2025-02-25 10:00:00',
                'updated_at' => '2025-03-02 14:00:00'
            ],
            [
                'title' => 'Project Laravel x Vue Internship',
                'description' => 'Fokus pada fitur-fitur API penting dan integrasi dengan frontend. Progress tracking melalui board Trello.',
                'status' => 'in_progress',
                'priority' => 'high',
                'user_id' => 1,
                'created_at' => '2025-03-20 11:00:00',
                'updated_at' => '2025-04-02 13:45:00'
            ],
            [
                'title' => 'Review Materi HTML & CSS',
                'description' => 'Mempelajari kembali dasar-dasar HTML dan CSS melalui playlist Web Programming UNPAS.',
                'status' => 'in_progress',
                'priority' => 'low',
                'user_id' => 1,
                'created_at' => '2025-02-18 08:30:00',
                'updated_at' => '2025-02-19 09:00:00'
            ],
            [
                'title' => 'Rencana Belanja Komponen PC',
                'description' => null,
                'status' => 'done',
                'priority' => 'medium',
                'user_id' => 1,
                'created_at' => '2025-03-29 09:50:00',
                'updated_at' => '2025-04-01 10:20:00'
            ],
            [
                'title' => 'Persiapan Sidang Akhir',
                'description' => 'Checklist seluruh berkas administrasi dan teknis untuk sidang akhir, termasuk revisi skripsi dan presentasi.',
                'status' => 'in_progress',
                'priority' => 'high',
                'user_id' => 2,
                'created_at' => '2025-02-15 09:00:00',
                'updated_at' => '2025-02-17 11:45:00'
            ],
            [
                'title' => 'Itinerary Liburan ke Jepang',
                'description' => 'Susun jadwal dan tempat yang akan dikunjungi selama liburan musim semi ke Jepang.',
                'status' => 'in_progress',
                'priority' => 'low',
                'user_id' => 2,
                'created_at' => '2025-03-05 10:00:00',
                'updated_at' => '2025-03-20 12:30:00'
            ],
            [
                'title' => 'Meal Prep Mingguan',
                'description' => 'Rencana dan persiapan makanan sehat untuk satu minggu ke depan. Fokus pada makanan rendah karbohidrat.',
                'status' => 'done',
                'priority' => 'medium',
                'user_id' => 2,
                'created_at' => '2025-03-10 08:15:00',
                'updated_at' => '2025-03-11 09:00:00'
            ],
            [
                'title' => 'Belanja Kebutuhan Bulanan',
                'description' => null,
                'status' => 'in_progress',
                'priority' => 'low',
                'user_id' => 2,
                'created_at' => '2025-03-28 10:40:00',
                'updated_at' => '2025-03-28 13:00:00'
            ],
            [
                'title' => 'Update Portfolio Behance',
                'description' => 'Upload hasil desain UI terbaru untuk proyek aplikasi kesehatan dan edukasi.',
                'status' => 'done',
                'priority' => 'medium',
                'user_id' => 2,
                'created_at' => '2025-04-01 09:20:00',
                'updated_at' => '2025-04-03 10:30:00'
            ],
            [
                'title' => 'Rencana Konten Instagram Bisnis',
                'description' => 'Buat konten 2 minggu ke depan untuk akun bisnis skincare lokal. Fokus pada interaksi dan storytelling.',
                'status' => 'done',
                'priority' => 'high',
                'user_id' => 2,
                'created_at' => '2025-03-22 08:45:00',
                'updated_at' => '2025-03-24 09:50:00'
            ],
            [
                'title' => 'Persiapan Ujian Tengah Semester',
                'description' => 'Buat ringkasan materi dan latihan soal untuk 5 mata pelajaran utama. Prioritaskan mata kuliah hitungan.',
                'status' => 'done',
                'priority' => 'high',
                'user_id' => 3,
                'created_at' => '2025-02-26 08:30:00',
                'updated_at' => '2025-03-05 09:15:00'
            ],
            [
                'title' => 'Project Desain Interior Kamar',
                'description' => 'Cari inspirasi desain, buat sketsa, dan list barang yang akan dibeli.',
                'status' => 'in_progress',
                'priority' => 'medium',
                'user_id' => 3,
                'created_at' => '2025-03-03 10:45:00',
                'updated_at' => '2025-03-07 11:20:00'
            ],
            [
                'title' => 'Jurnal Harian Pengembangan Diri',
                'description' => 'Tulis jurnal harian tentang progress pengembangan diri dan emotional healing.',
                'status' => 'done',
                'priority' => 'low',
                'user_id' => 3,
                'created_at' => '2025-02-10 08:20:00',
                'updated_at' => '2025-03-01 09:10:00'
            ],
            [
                'title' => 'Pendaftaran Beasiswa Semester Genap',
                'description' => null,
                'status' => 'in_progress',
                'priority' => 'high',
                'user_id' => 3,
                'created_at' => '2025-03-18 09:30:00',
                'updated_at' => '2025-03-19 10:45:00'
            ],
            [
                'title' => 'Konten Youtube Edukasi',
                'description' => 'Rencana topik video untuk edukasi pelajar SMA, editing, dan strategi upload.',
                'status' => 'in_progress',
                'priority' => 'medium',
                'user_id' => 3,
                'created_at' => '2025-03-25 08:30:00',
                'updated_at' => '2025-03-27 11:00:00'
            ],
            [
                'title' => 'Rutinitas Pagi Baru',
                'description' => 'Membangun rutinitas pagi yang sehat dan produktif: meditasi, olahraga ringan, journaling.',
                'status' => 'in_progress',
                'priority' => 'low',
                'user_id' => 3,
                'created_at' => '2025-02-22 08:10:00',
                'updated_at' => '2025-03-10 09:00:00'
            ]
        ];

        foreach ($lists as $list) {
            ListModel::create($list);
        }
    }
}
