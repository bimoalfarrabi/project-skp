<?php

namespace App\Filament\Resources\MatriksResource\Pages;

use App\Filament\Resources\MatriksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatriks extends ListRecords
{
    protected static string $resource = MatriksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
