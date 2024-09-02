<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use App\Filament\Resources\RegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegulations extends CreateRecord
{
    protected static string $resource = RegulationsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return __('Regulation Created Successfully');
    }

}
