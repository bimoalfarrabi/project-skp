<?php

namespace App\Filament\Resources\SkpResource\Pages;

use App\Filament\Resources\SkpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkps extends ListRecords
{
    protected static string $resource = SkpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
