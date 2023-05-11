<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluasiPegawaiResource\Pages;
use App\Filament\Resources\EvaluasiPegawaiResource\RelationManagers;
use App\Models\EvaluasiPegawai;
use App\Models\HasilKerja;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvaluasiPegawaiResource extends Resource
{
    protected static ?string $model = EvaluasiPegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Evaluasi Pegawai';
    protected static ?string $navigationGroup = 'Sasaran Kinerja';
 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('Bukti dukung')
                ->multiple(),
                Forms\Components\TextInput::make('umpan balik')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('hasil')
                ->label('Ekspetasi')
                ->options(HasilKerja::all()->pluck('hasil', 'id'))
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bukti dukung'),
                Tables\Columns\TextColumn::make('umpan balik'),
                Tables\Columns\TextColumn::make('matriks_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListEvaluasiPegawais::route('/'),
            'create' => Pages\CreateEvaluasiPegawai::route('/create'),
            'edit' => Pages\EditEvaluasiPegawai::route('/{record}/edit'),
        ];
    }    
}
