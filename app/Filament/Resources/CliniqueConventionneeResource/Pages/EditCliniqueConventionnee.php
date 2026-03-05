<?php

namespace App\Filament\Resources\CliniqueConventionneeResource\Pages;

use App\Filament\Resources\CliniqueConventionneeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCliniqueConventionnee extends EditRecord
{
    protected static string $resource = CliniqueConventionneeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
