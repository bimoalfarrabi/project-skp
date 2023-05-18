<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PejabatPenilaiResource\Pages;
use App\Filament\Resources\PejabatPenilaiResource\RelationManagers;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PejabatPenilaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;
    protected static ?string $navigationLabel = 'Pejabat Penilai';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Admin Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPejabatPenilais::route('/'),
            'create' => Pages\CreatePejabatPenilai::route('/create'),
            'edit' => Pages\EditPejabatPenilai::route('/{record}/edit'),
        ];
    }    
}
