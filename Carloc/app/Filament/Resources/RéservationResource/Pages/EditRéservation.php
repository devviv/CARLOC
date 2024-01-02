<?php

namespace App\Filament\Resources\RéservationResource\Pages;

use App\Filament\Resources\RéservationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRéservation extends EditRecord
{
    protected static string $resource = RéservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
