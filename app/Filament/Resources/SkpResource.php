<?php

namespace App\Filament\Resources;

// use App\Filament\Resources\SkpResource\Pages;
use App\Filament\Resources\EvaluasiPegawaiResource\Pages;
use App\Filament\Resources\SkpResource\RelationManagers;
use App\Models\EvaluasiPegawai;
use App\Models\HasilKerja;
use App\Models\Skp;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkpResource extends Resource
{
    protected static ?string $model = EvaluasiPegawai::class;
    // protected static ?string $title = 'test';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Penilaian Pegawai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('umpan_balik')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('hasil_kerja_id')
                ->label('Ekspetasi')
                ->options(HasilKerja::all()->pluck('hasil', 'id'))
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('periode_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            // 'create' => Pages\CreateSkp::route('/create'),
            // 'view' => Pages\ViewSkp::route('/{record}'),
            // 'edit' => Pages\EditSkp::route('/{record}/edit'),
            'index' => Pages\ListEvaluasiPegawais::route('/'),
            'create' => Pages\CreateEvaluasiPegawai::route('/create'),
            'edit' => Pages\EditEvaluasiPegawai::route('/{record}/edit'),
        ];
    }    
}
