<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluasiPegawaiResource\Pages;
use App\Filament\Resources\EvaluasiPegawaiResource\RelationManagers;
use App\Models\EvaluasiPegawai;
use App\Models\HasilKerja;
use App\Models\Matriks;
use Doctrine\DBAL\Schema\View;
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
    protected static ?string $navigationLabel = 'Penilaian Pegawai';
    protected static ?string $navigationGroup = 'Sasaran Kinerja';
 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('matriks_id')
                ->label('sasaran kerja')
                ->options(Matriks::where('user_id', auth()->id())->get()->pluck('sasaran_kerja', 'id'))
                ->searchable(),

                Forms\Components\TextInput::make('umpan_balik')
                ->required()
                ->maxLength(255),
                
                Forms\Components\Select::make('hasil_kerja_id')
                ->label('Ekspetasi')
                ->options(HasilKerja::all()->pluck('hasil','id'))
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('bukti dukung'),
                Tables\Columns\TextColumn::make('Hasil Kerja')
                ->formatStateUsing(
                    function(EvaluasiPegawai $record){
                        return $record->matriks->sasaran_kerja;
                    }
                ),
                Tables\Columns\TextColumn::make('umpan_balik'),
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
            'detail' => Pages\RealisasiView::route('/{record}/detail'),
            'create' => Pages\CreateEvaluasiPegawai::route('/create'),
            'edit' => Pages\EditEvaluasiPegawai::route('/{record}/edit'),
        ];
    }
}
