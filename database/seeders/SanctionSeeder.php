<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sanctions = [
            [
                'kategori_sanksi' => 'kode etik',
                'nama_sanksi' => 'Pemberhentian Secara Tidak Hormat Bagi Pengurus Yang Melanggar Kode Etik',
            ],
            [
                'kategori_sanksi' => 'administratif',
                'nama_sanksi' => 'Pengembalian Pembinaan',
            ],
            [
                'kategori_sanksi' => 'administratif',
                'nama_sanksi' => 'Skorsing',
            ],
            [
                'kategori_sanksi' => 'administratif',
                'nama_sanksi' => 'Surat Peringatan',
            ],
            [
                'kategori_sanksi' => 'moral',
                'nama_sanksi' => 'Potong Gundul',
            ],
        ];
        foreach ($sanctions as $sanction) {
            \App\Models\Sanction::create($sanction);
        }
    }
}
