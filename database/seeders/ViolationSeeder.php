<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViolationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $violations = [
            // [
            //     'kategori_pelanggaran' => 'ringan',
            //     'nama_pelanggaran' => 'Tidak Izin Keluar Pondok Pesantren',
            // ],
            // [
            //     'kategori_pelanggaran' => 'berat',
            //     'nama_pelanggaran' => 'Santri Mencuri Makanan',
            // ],
            // [
            //     'kategori_pelanggaran' => 'berat',
            //     'nama_pelanggaran' => 'Santri Berpacaran',
            // ],
            // [
            //     'kategori_pelanggaran' => 'berat',
            //     'nama_pelanggaran' => 'Santri Bolos Ngaji',
            // ],
            // [
            //     'kategori_pelanggaran' => 'sedang',
            //     'nama_pelanggaran' => 'Santri Merokok',
            // ],
            // [
            //     'kategori_pelanggaran' => 'berat',
            //     'nama_pelanggaran' => 'Santri Tidak Sholat',
            // ],
        ];
        foreach ($violations as $violation) {
            \App\Models\Violation::create($violation);
        }
    }
}
