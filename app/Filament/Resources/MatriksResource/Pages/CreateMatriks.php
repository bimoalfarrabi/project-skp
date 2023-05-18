<?php

namespace App\Filament\Resources\MatriksResource\Pages;

use App\Filament\Resources\MatriksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMatriks extends CreateRecord
{
    protected static string $resource = MatriksResource::class;
    
    protected function getRedirectUrl(): string{
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
