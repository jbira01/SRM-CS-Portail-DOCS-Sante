<?php

namespace App\Filament\Resources\MedecinNonConventionneResource\Pages;

use App\Filament\Resources\MedecinNonConventionneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedecinNonConventionne extends EditRecord
{
    protected static string $resource = MedecinNonConventionneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
