<?php

namespace App\Filament\Resources\KartuTandaPenduduks\Tables;

use App\Models\KartuTandaPenduduk;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KartuTandaPenduduksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                TextColumn::make('nik')
                    ->searchable(),
                TextColumn::make('nomor_kk')
                    ->searchable(),
                TextColumn::make('tempat_lahir')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('jenis_kelamin')
                    ->searchable(),
                TextColumn::make('golongan_darah')
                    ->searchable(),
                TextColumn::make('alamat')
                    ->searchable(),
                TextColumn::make('rt_rw')
                    ->searchable(),
                TextColumn::make('kelurahan_desa')
                    ->searchable(),
                TextColumn::make('kecamatan')
                    ->searchable(),
                TextColumn::make('agama')
                    ->searchable(),
                TextColumn::make('status_perkawinan')
                    ->searchable(),
                TextColumn::make('pekerjaan')
                    ->searchable(),
                TextColumn::make('kewarganegaraan')
                    ->searchable(),
                TextColumn::make('berlaku_hingga')
                    ->searchable(),
                TextColumn::make('foto')
                    ->searchable(),
                TextColumn::make('tanggal_disahkan')
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('lihat_ktp')
                    ->label('Lihat KTP')
                    ->icon('heroicon-o-eye')
                    ->url(fn (KartuTandaPenduduk $record): string => route('ktp.view', ['kartuTandaPenduduk' => $record->id]))
                    ->openUrlInNewTab()
                    ->color('primary'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
