<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuktiDukungResource\Pages;
use App\Filament\Resources\BuktiDukungResource\RelationManagers;
use App\Models\BuktiDukung;
use App\Models\Matriks;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BuktiDukungResource extends Resource
{   

    protected static ?string $model = BuktiDukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('matriks_id')
                ->label('sasaran kerja')
                ->options(Matriks::where('user_id', auth()->id())->get()->pluck('sasaran_kerja', 'id'))
                ->searchable(),

                Forms\Components\FileUpload::make('nama_file')
                ->multiple()
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(1024)
                ->enableDownload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('')->label('Sasaran')->limit(50),
                Tables\Columns\TextColumn::make('sasaran kerja')
                ->formatStateUsing(
                    function(BuktiDukung $record){
                        return $record->matriks->sasaran_kerja;
                    }
                )
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
            'index' => Pages\ListBuktiDukungs::route('/'),
            'create' => Pages\CreateBuktiDukung::route('/create'),
            'edit' => Pages\EditBuktiDukung::route('/{record}/edit'),
        ];
    }    


}
