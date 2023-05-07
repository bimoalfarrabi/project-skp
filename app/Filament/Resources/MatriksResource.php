<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatriksResource\Pages;
use App\Filament\Resources\MatriksResource\RelationManagers;
use App\Filament\Resources\MatriksResource\RelationManagers\IndikatorRelationManager;
use App\Models\Matriks;
use Filament\Tables\Filters\Filter;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use PhpParser\Parser\Multiple;

class MatriksResource extends Resource
{
    protected static ?string $model = Matriks::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                // Forms\Components\TextInput::make('user')->default(Auth::user()),
                // ->options(Matriks::all()->pluck('sasaran_kerja', 'id'))
                
                Select::make('user_id')
                ->label('Pegawai')
                ->options(User::where('id', '!=', auth()->id())->get()->pluck('name', 'id'))->searchable(),
                
                // Select::make('sasaranAtasan_id')
                // ->label('Sasaran atasan')
                // ->options(Matriks::with('sasaranAtasan')->get()->where('user_id', '!=', auth()->id())->pluck('sasaran_kerja', 'id'))
                // ->searchable(),

                Select::make('sasaranAtasan_id')
                ->label('Sasaran yang diintervensi')
                ->options(function (callable $get){
                    $user = User::find($get('user_id'));
                    if(!$user){
                        return null;
                    }
                    return $user->matriks->pluck('sasaran_kerja', 'id');
                })
                ->searchable(),
                    

                // Select::make('sasaran_atasan')
                // ->label('Sasaran atasan')
                // ->options(Matriks::where('user_id', '!=', auth()->id())->pluck('sasaran_kerja', 'id'))
                // ->searchable(),
                // ->getRelationship()
                // ->relationship('matriks', 'sasaranAtasan_id')

                // Select::make('')
                // ->relationship('sasaranAtasan', 'sasaran_kerja' ),

                Forms\Components\TextInput::make('sasaran_kerja')->required(),
                Forms\Components\Repeater::make('indikator_keberhasilans')
                ->relationship('indikator')
                ->schema([
                    TextInput::make('teks_indikator')->required()
                ])
                ->columns(2),
                // Forms\Components\Select::make('sasaran_kerja')->multiple()->required(),
                // Forms\Components\Select::make('user_id')->relationship('user', 'email')
                // ->default('test1@test.com')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('sasaran_kerja')
                // Tables\Columns\TextColumn::make('indikator_keberhasilans'),
                // Tables\Columns\Select::make('user_id')
            ])
            ->filters([
                // Filter::make('user')
                // ->query(fn (Builder $query): Builder => $query->where('user_id', true))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
            // IndikatorRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatriks::route('/'),
            'create' => Pages\CreateMatriks::route('/create'),
            'edit' => Pages\EditMatriks::route('/{record}/edit'),
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
    return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }
}
