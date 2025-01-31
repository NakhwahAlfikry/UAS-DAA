<?php

namespace App\Filament\Admin\Resources\DataPersonalResource\Pages;

use App\Filament\Admin\Resources\DataPersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPersonals extends ListRecords
{
    protected static string $resource = DataPersonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
