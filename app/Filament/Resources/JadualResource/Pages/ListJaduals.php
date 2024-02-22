<?php

namespace App\Filament\Resources\JadualResource\Pages;

use App\Filament\Resources\JadualResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJaduals extends ListRecords
{
    protected static string $resource = JadualResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
