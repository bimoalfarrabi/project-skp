<?php

namespace App\Filament\Resources\EvaluasiPegawaiResource\Pages;

use App\Filament\Resources\EvaluasiPegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvaluasiPegawai extends EditRecord
{
    protected static string $resource = EvaluasiPegawaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
