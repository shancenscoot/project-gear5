<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $santri = [
            // [
            //     'nis' => 1,
            //     'nama_santri' => 'Santri',
            //     'jenis_kelamin' => 'L',
            //     'nama_wali' => 'Wali',
            //     'alamat' => 'Alamat',
            //     'no_telp' => 'No Telp',
            // ],
        ];
        foreach ($santri as $santri) {
            \App\Models\Santri::create($santri);
        }
    }
}
