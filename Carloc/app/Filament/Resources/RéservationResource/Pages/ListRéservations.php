<?php

namespace App\Filament\Resources\RéservationResource\Pages;

use App\Filament\Resources\RéservationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRéservations extends ListRecords
{
    protected static string $resource = RéservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
