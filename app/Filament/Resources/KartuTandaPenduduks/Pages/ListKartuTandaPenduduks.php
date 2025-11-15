<?php

namespace App\Filament\Resources\KartuTandaPenduduks\Pages;

use App\Filament\Resources\KartuTandaPenduduks\KartuTandaPendudukResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKartuTandaPenduduks extends ListRecords
{
    protected static string $resource = KartuTandaPendudukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
