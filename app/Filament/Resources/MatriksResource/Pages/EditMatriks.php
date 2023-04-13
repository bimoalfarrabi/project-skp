<?php

namespace App\Filament\Resources\MatriksResource\Pages;

use App\Filament\Resources\MatriksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatriks extends EditRecord
{
    protected static string $resource = MatriksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
