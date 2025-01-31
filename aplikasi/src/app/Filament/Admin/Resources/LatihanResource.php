<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LatihanResource\Pages;
use App\Filament\Admin\Resources\LatihanResource\RelationManagers;
use App\Models\Latihan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LatihanResource extends Resource
{
    protected static ?string $model = Latihan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Kantoran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Wirausahawan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Di_Rumah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Durasi')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Kantoran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Wirausahawan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Di_Rumah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Durasi')
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
            'index' => Pages\ListLatihans::route('/'),
            'create' => Pages\CreateLatihan::route('/create'),
            'edit' => Pages\EditLatihan::route('/{record}/edit'),
        ];
    }
}
