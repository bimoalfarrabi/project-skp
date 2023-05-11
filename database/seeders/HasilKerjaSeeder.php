<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HasilKerja;

class HasilKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HasilKerja::create([

            'hasil' => 'Dibawah ekspetasi'
        ]);
        HasilKerja::create([

            'hasil' => 'Sesuai ekspetasi'
        ]);
        HasilKerja::create([

            'hasil' => 'Diatas ekspetasi'
        ]);
    }
}
