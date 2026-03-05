<?php

namespace App\Filament\Resources\MedecinConventionneResource\Pages;

use App\Filament\Resources\MedecinConventionneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedecinConventionnes extends ListRecords
{
    protected static string $resource = MedecinConventionneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
