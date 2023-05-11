<?php

namespace App\Filament\Resources\BuktiDukungResource\Pages;

use App\Filament\Resources\BuktiDukungResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuktiDukungs extends ListRecords
{
    protected static string $resource = BuktiDukungResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
