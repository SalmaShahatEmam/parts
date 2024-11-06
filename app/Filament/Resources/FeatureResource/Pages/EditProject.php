<?php

namespace App\Filament\Resources\FeatureResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

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
        return __('Project Updated Successfully');
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
