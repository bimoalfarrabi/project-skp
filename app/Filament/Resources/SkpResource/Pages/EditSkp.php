<?php

namespace App\Filament\Resources\SkpResource\Pages;

use App\Filament\Resources\SkpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkp extends EditRecord
{
    protected static string $resource = SkpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
