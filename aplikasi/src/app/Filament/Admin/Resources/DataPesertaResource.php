<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataPesertaResource\Pages;
use App\Filament\Admin\Resources\DataPesertaResource\RelationManagers;
use App\Models\DataPeserta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPesertaResource extends Resource
{
    protected static ?string $model = DataPeserta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('profesi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tujuan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rekomendasi_latihan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('profesi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tujuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rekomendasi_latihan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDataPesertas::route('/'),
            'create' => Pages\CreateDataPeserta::route('/create'),
            'edit' => Pages\EditDataPeserta::route('/{record}/edit'),
        ];
    }
}
