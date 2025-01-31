<?php

namespace App\Filament\Admin\Resources\LatihanResource\Pages;

use App\Filament\Admin\Resources\LatihanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatihan extends EditRecord
{
    protected static string $resource = LatihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
