<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['title' => 'Pahami directive dasar', 'status' => 'done', 'list_id' => 1],
            ['title' => 'Coba binding class', 'status' => 'done', 'list_id' => 1],
            ['title' => 'Belajar event handling', 'status' => 'in_progress', 'list_id' => 1],
            ['title' => 'Latihan component', 'status' => 'in_progress', 'list_id' => 1],
            ['title' => 'Pelajari Vue CLI', 'status' => 'in_progress', 'list_id' => 1],

            ['title' => 'Isi dokumen pendaftaran', 'status' => 'done', 'list_id' => 2],
            ['title' => 'Cetak KTM', 'status' => 'in_progress', 'list_id' => 2],
            ['title' => 'Validasi ke bagian akademik', 'status' => 'in_progress', 'list_id' => 2],
            ['title' => 'Upload berkas ke sistem', 'status' => 'in_progress', 'list_id' => 2],

            ['title' => 'Tulis intro dan latar belakang', 'status' => 'done', 'list_id' => 3],
            ['title' => 'Cari sumber jurnal pendukung', 'status' => 'done', 'list_id' => 3],
            ['title' => 'Tulis metode penelitian', 'status' => 'done', 'list_id' => 3],
            ['title' => 'Revisi berdasarkan masukan dosen', 'status' => 'done', 'list_id' => 3],
            ['title' => 'Submit PDF ke sistem', 'status' => 'done', 'list_id' => 3],

            ['title' => 'Pilih topik konten seminggu', 'status' => 'in_progress', 'list_id' => 4],
            ['title' => 'Ambil foto produk', 'status' => 'in_progress', 'list_id' => 4],
            ['title' => 'Edit konten pakai Canva', 'status' => 'in_progress', 'list_id' => 4],
            ['title' => 'Jadwalkan posting di Instagram', 'status' => 'in_progress', 'list_id' => 4],

            ['title' => 'Buat wireframe halaman home', 'status' => 'done', 'list_id' => 5],
            ['title' => 'Implementasi login page', 'status' => 'done', 'list_id' => 5],
            ['title' => 'Setup database user', 'status' => 'done', 'list_id' => 5],
            ['title' => 'Test fitur autentikasi', 'status' => 'in_progress', 'list_id' => 5],

            ['title' => 'Buat desain undangan', 'status' => 'done', 'list_id' => 6],
            ['title' => 'Kirim undangan ke keluarga besar', 'status' => 'done', 'list_id' => 6],
            ['title' => 'Booking katering', 'status' => 'done', 'list_id' => 6],
            ['title' => 'Coba fitting jas', 'status' => 'done', 'list_id' => 6],

            ['title' => 'Catat pengeluaran harian', 'status' => 'in_progress', 'list_id' => 7],
            ['title' => 'Update pengeluaran rutin', 'status' => 'in_progress', 'list_id' => 7],
            ['title' => 'Cek tagihan bulan ini', 'status' => 'in_progress', 'list_id' => 7],
            ['title' => 'Hitung sisa uang bulanan', 'status' => 'in_progress', 'list_id' => 7],

            ['title' => 'Persiapan sesi pemotretan', 'status' => 'in_progress', 'list_id' => 8],
            ['title' => 'Cari inspirasi pose', 'status' => 'in_progress', 'list_id' => 8],
            ['title' => 'Edit hasil foto', 'status' => 'in_progress', 'list_id' => 8],

            ['title' => 'Isi form registrasi TOEFL', 'status' => 'done', 'list_id' => 9],
            ['title' => 'Bayar biaya ujian', 'status' => 'done', 'list_id' => 9],
            ['title' => 'Datang ke lokasi ujian', 'status' => 'done', 'list_id' => 9],
            ['title' => 'Ambil sertifikat', 'status' => 'done', 'list_id' => 9],

            ['title' => 'Pelajari bagian speaking part 1', 'status' => 'in_progress', 'list_id' => 10],
            ['title' => 'Latihan listening section', 'status' => 'in_progress', 'list_id' => 10],
            ['title' => 'Kerjakan soal reading', 'status' => 'in_progress', 'list_id' => 10],
            ['title' => 'Review grammar dasar', 'status' => 'in_progress', 'list_id' => 10],

            ['title' => 'Update landing page produk', 'status' => 'done', 'list_id' => 11],
            ['title' => 'Tambah halaman testimoni', 'status' => 'done', 'list_id' => 11],
            ['title' => 'Optimasi gambar', 'status' => 'done', 'list_id' => 11],

            ['title' => 'Pelajari Laravel resource controller', 'status' => 'done', 'list_id' => 12],
            ['title' => 'Implementasi relasi Eloquent', 'status' => 'done', 'list_id' => 12],
            ['title' => 'Coba seeder dan factory', 'status' => 'done', 'list_id' => 12],

            ['title' => 'Susun materi MC', 'status' => 'done', 'list_id' => 13],
            ['title' => 'Latihan intonasi suara', 'status' => 'done', 'list_id' => 13],
            ['title' => 'Cek rundown acara', 'status' => 'done', 'list_id' => 13],

            ['title' => 'Revisi layout halaman galeri', 'status' => 'in_progress', 'list_id' => 14],
            ['title' => 'Tambah slider', 'status' => 'in_progress', 'list_id' => 14],
            ['title' => 'Uji responsivitas mobile', 'status' => 'in_progress', 'list_id' => 14],

            ['title' => 'Tulis lirik lagu pujian', 'status' => 'done', 'list_id' => 15],
            ['title' => 'Rekam musik latar', 'status' => 'done', 'list_id' => 15],
            ['title' => 'Mixing dan mastering', 'status' => 'done', 'list_id' => 15],

            ['title' => 'Catat tugas yang belum selesai', 'status' => 'in_progress', 'list_id' => 16],
            ['title' => 'Tentukan prioritas harian', 'status' => 'in_progress', 'list_id' => 16],
            ['title' => 'Review hasil mingguan', 'status' => 'in_progress', 'list_id' => 16],

            ['title' => 'Cek persyaratan pendaftaran', 'status' => 'done', 'list_id' => 17],
            ['title' => 'Kumpulkan dokumen legalisir', 'status' => 'done', 'list_id' => 17],
            ['title' => 'Upload ke sistem kampus', 'status' => 'in_progress', 'list_id' => 17],

            ['title' => 'Susun strategi kompetisi', 'status' => 'in_progress', 'list_id' => 18],
            ['title' => 'Latihan soal harian', 'status' => 'in_progress', 'list_id' => 18],
            ['title' => 'Review materi teknis', 'status' => 'in_progress', 'list_id' => 18]
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
