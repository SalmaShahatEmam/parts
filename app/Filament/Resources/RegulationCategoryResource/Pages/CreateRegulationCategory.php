<?php

namespace App\Filament\Resources\RegulationCategoryResource\Pages;

use App\Filament\Resources\RegulationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegulationCategory extends CreateRecord
{
    protected static string $resource = RegulationCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return __('Regulation Category Created Successfully');
    }
}
