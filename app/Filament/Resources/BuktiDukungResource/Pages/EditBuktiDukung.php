<?php

namespace App\Filament\Resources\BuktiDukungResource\Pages;

use App\Filament\Resources\BuktiDukungResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuktiDukung extends EditRecord
{
    protected static string $resource = BuktiDukungResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
