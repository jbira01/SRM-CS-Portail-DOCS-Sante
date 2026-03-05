<?php

namespace App\Filament\Resources\MedecinConventionneResource\Pages;

use App\Filament\Resources\MedecinConventionneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedecinConventionne extends EditRecord
{
    protected static string $resource = MedecinConventionneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
