<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periode;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periode::create([
            'periode_awal' => '2023-01-01',
            'periode_akhir' => '2023-01-31'
        ]);
        Periode::create([
            'periode_awal' => '2023-02-01',
            'periode_akhir' => '2023-01-28'
        ]);
    }
}
