<?php

namespace App\Filament\Resources\CliniqueConventionneeResource\Pages;

use App\Filament\Resources\CliniqueConventionneeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCliniqueConventionnees extends ListRecords
{
    protected static string $resource = CliniqueConventionneeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
