<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use App\Filament\Resources\RegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegulations extends ListRecords
{
    protected static string $resource = RegulationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
