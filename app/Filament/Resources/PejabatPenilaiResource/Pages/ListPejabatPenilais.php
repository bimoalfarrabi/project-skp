<?php

namespace App\Filament\Resources\PejabatPenilaiResource\Pages;

use App\Filament\Resources\PejabatPenilaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPejabatPenilais extends ListRecords
{
    protected static string $resource = PejabatPenilaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
