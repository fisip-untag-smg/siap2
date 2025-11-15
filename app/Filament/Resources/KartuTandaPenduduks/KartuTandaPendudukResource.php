<?php

namespace App\Filament\Resources\KartuTandaPenduduks;

use App\Filament\Resources\KartuTandaPenduduks\Pages\CreateKartuTandaPenduduk;
use App\Filament\Resources\KartuTandaPenduduks\Pages\EditKartuTandaPenduduk;
use App\Filament\Resources\KartuTandaPenduduks\Pages\ListKartuTandaPenduduks;
use App\Filament\Resources\KartuTandaPenduduks\Schemas\KartuTandaPendudukForm;
use App\Filament\Resources\KartuTandaPenduduks\Tables\KartuTandaPenduduksTable;
use App\Models\KartuTandaPenduduk;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KartuTandaPendudukResource extends Resource
{
    protected static ?string $model = KartuTandaPenduduk::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return KartuTandaPendudukForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KartuTandaPenduduksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKartuTandaPenduduks::route('/'),
            'create' => CreateKartuTandaPenduduk::route('/create'),
            'edit' => EditKartuTandaPenduduk::route('/{record}/edit'),
        ];
    }
}
