<?php

namespace App\Filament\Resources\PejabatPenilaiResource\Pages;

use App\Filament\Resources\PejabatPenilaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPejabatPenilai extends EditRecord
{
    protected static string $resource = PejabatPenilaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
