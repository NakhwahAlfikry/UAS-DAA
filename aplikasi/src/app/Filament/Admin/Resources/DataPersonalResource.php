<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataPersonalResource\Pages;
use App\Filament\Admin\Resources\DataPersonalResource\RelationManagers;
use App\Models\DataPersonal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPersonalResource extends Resource
{
    protected static ?string $model = DataPersonal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tinggi_Badan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Berat_Badan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Usia')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Jam_Tidur')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tinggi_Badan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Berat_Badan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Usia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Jam_Tidur')
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
            'index' => Pages\ListDataPersonals::route('/'),
            'create' => Pages\CreateDataPersonal::route('/create'),
            'edit' => Pages\EditDataPersonal::route('/{record}/edit'),
        ];
    }
}
