<?php

namespace App\Filament\Resources\SkpResource\Pages;

use App\Filament\Resources\SkpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSkp extends ViewRecord
{
    protected static string $resource = SkpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
