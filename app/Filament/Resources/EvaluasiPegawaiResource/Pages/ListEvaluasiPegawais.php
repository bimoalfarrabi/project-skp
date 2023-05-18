<?php

namespace App\Filament\Resources\EvaluasiPegawaiResource\Pages;

use App\Filament\Resources\EvaluasiPegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;

class ListEvaluasiPegawais extends ListRecords
{
    protected static string $resource = EvaluasiPegawaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // protected function getTableHeader(): View
    // {
    //     return view('filament.resources.evaluasi-pegawai-resource.pages.realisasi-view');
    // }
}
