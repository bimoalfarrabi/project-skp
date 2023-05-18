<?php

namespace App\Filament\Resources\EvaluasiPegawaiResource\Pages;

use App\Filament\Resources\EvaluasiPegawaiResource;
use Filament\Resources\Pages\Page;
use App\Models\EvaluasiPegawai;

class RealisasiView extends Page
{
    protected static string $resource = EvaluasiPegawaiResource::class;
    protected static string $view = 'filament.resources.evaluasi-pegawai-resource.pages.realisasi-view';

    // public function display(EvaluasiPegawai $record){
    //     $realisasi = EvaluasiPegawai::find($record);
    //     return view('filament.resources.evaluasi-pegawai-resource.pages.realisasi-view', [
    //         'record' => $realisasi,
    //     ]);
    // }
}
