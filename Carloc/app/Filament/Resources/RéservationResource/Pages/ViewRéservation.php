<?php

namespace App\Filament\Resources\RéservationResource\Pages;

use App\Filament\Resources\RéservationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRéservation extends ViewRecord
{
    protected static string $resource = RéservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
