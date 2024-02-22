<?php

namespace App\Filament\Resources\JadualResource\Pages;

use App\Filament\Resources\JadualResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadual extends EditRecord
{
    protected static string $resource = JadualResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
