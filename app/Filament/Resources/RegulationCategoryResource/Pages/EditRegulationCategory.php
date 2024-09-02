<?php

namespace App\Filament\Resources\RegulationCategoryResource\Pages;

use App\Filament\Resources\RegulationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegulationCategory extends EditRecord
{
    protected static string $resource = RegulationCategoryResource::class;

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
        return __('Regulation Category Updated Successfully');
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
