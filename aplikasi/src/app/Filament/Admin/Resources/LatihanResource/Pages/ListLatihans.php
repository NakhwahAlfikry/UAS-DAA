<?php

namespace App\Filament\Admin\Resources\LatihanResource\Pages;

use App\Filament\Admin\Resources\LatihanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatihans extends ListRecords
{
    protected static string $resource = LatihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
