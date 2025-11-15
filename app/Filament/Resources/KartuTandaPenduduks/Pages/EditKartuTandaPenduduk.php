<?php

namespace App\Filament\Resources\KartuTandaPenduduks\Pages;

use App\Filament\Resources\KartuTandaPenduduks\KartuTandaPendudukResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKartuTandaPenduduk extends EditRecord
{
    protected static string $resource = KartuTandaPendudukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
