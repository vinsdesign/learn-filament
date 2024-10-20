<?php

namespace App\Filament\Resources\DronesResource\Pages;

use App\Filament\Resources\DronesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrones extends EditRecord
{
    protected static string $resource = DronesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
