<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use App\Filament\Resources\RegulationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegulations extends EditRecord
{
    protected static string $resource = RegulationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return __('Regulation Updated Successfully');
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


}
