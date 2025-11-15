<?php

namespace App\Filament\Resources\KartuTandaPenduduks\Schemas;

use emmanpbarrameda\FilamentTakePictureField\Forms\Components\TakePicture;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Schema;

class KartuTandaPendudukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('nik'),
                // TextInput::make('nomor_kk'),
                // TextInput::make('tempat_lahir'),
                // DatePicker::make('tanggal_lahir'),
                // TextInput::make('nama'),
                // TextInput::make('jenis_kelamin'),
                // TextInput::make('golongan_darah'),
                // TextInput::make('alamat'),
                // TextInput::make('rt_rw'),
                // TextInput::make('kelurahan_desa'),
                // TextInput::make('kecamatan'),
                // TextInput::make('agama'),
                // TextInput::make('status_perkawinan'),
                // TextInput::make('pekerjaan'),
                // TextInput::make('kewarganegaraan'),
                // TextInput::make('berlaku_hingga'),
                // TextInput::make('foto'),
                // DatePicker::make('tanggal_disahkan'),
                Wizard::make([
                    Wizard\Step::make('Data Pribadi')
                        ->schema([
                            TextInput::make('nik')
                                //->visible(Auth::user()->hasRole('super_admin'))
                                ->dehydrated(true)
                                ->label('NIK')
                                ->maxLength(16),
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->maxLength(255)
                                ->placeholder('Aliya Takwakwak')
                                ->required(),
                            TextInput::make('tempat_lahir')
                                ->label('Tempat Lahir')
                                ->placeholder('Zurich')
                                ->maxLength(255)
                                ->required(),
                            DatePicker::make('tanggal_lahir')
                                ->label('Tanggal Lahir')
                                ->format('Y-m-d')
                                ->displayFormat('d F Y')
                                ->required(),
                            Select::make('jenis_kelamin')
                                ->label('Jenis Kelamin')
                                ->options([
                                    'Laki-laki' => 'Laki-laki',
                                    'Perempuan' => 'Perempuan',
                                ])
                                ->required(),
                            Select::make('golongan_darah')
                                ->label('Golongan Darah')
                                ->options([
                                    'A' => 'A',
                                    'B' => 'B',
                                    'AB' => 'AB',
                                    'O' => 'O',
                                ]),
                        ])
                        ->columns(2),

                    Wizard\Step::make('Data Keluarga')
                        ->schema([
                            TextInput::make('nomor_kk')
                                ->label('Nomor KK')
                                ->maxLength(16)
                                ->required(),
                            Select::make('status_perkawinan')
                                ->label('Status Perkawinan')
                                ->options([
                                    'Belum Kawin' => 'Belum Kawin',
                                    'Kawin' => 'Kawin',
                                    'Cerai Hidup' => 'Cerai Hidup',
                                    'Cerai Mati' => 'Cerai Mati',
                                ])
                                ->required(),
                            Select::make('agama')
                                ->label('Agama')
                                ->options([
                                    'Islam' => 'Islam',
                                    'Kristen' => 'Kristen',
                                    'Katolik' => 'Katolik',
                                    'Hindu' => 'Hindu',
                                    'Buddha' => 'Buddha',
                                    'Khonghucu' => 'Khonghucu',
                                ])
                                ->required(),
                        ])
                        ->columns(2),

                    Wizard\Step::make('Data Alamat')
                        ->schema([
                            Textarea::make('alamat')
                                ->label('Alamat')
                                ->maxLength(255)
                                ->required()
                                ->rows(3),
                            TextInput::make('rt_rw')
                                ->label('RT/RW')
                                ->maxLength(10)
                                //->numeric()
                                ->placeholder('001/002')
                                ->mask('999/999')
                                ->regex('/^\d{3}\/\d{3}$/')
                                ->required(),
                            TextInput::make('kelurahan_desa')
                                ->label('Kelurahan/Desa')
                                ->maxLength(255)
                                ->required(),
                            TextInput::make('kecamatan')
                                ->label('Kecamatan')
                                ->maxLength(255)
                                ->required(),
                        ])
                        ->columns(2),

                    Wizard\Step::make('Data Lainnya')
                        ->schema([
                            TextInput::make('pekerjaan')
                                ->label('Pekerjaan')
                                ->maxLength(255)
                                ->required(),
                            Select::make('kewarganegaraan')
                                ->label('Kewarganegaraan')
                                ->options([
                                    'WNI' => 'WNI',
                                    'WNA' => 'WNA',
                                ])
                                ->default('WNI')
                                ->required(),
                            TextInput::make('berlaku_hingga')
                                ->label('Berlaku Hingga')
                                ->maxLength(255)
                                ->default('SEUMUR HIDUP'),
                            TakePicture::make('photo_camera')
                                ->label('Camera Test')
                                ->disk('public')
                                ->directory('uploads/services/payment_receipts_proof')
                                ->visibility('public')
                                ->useModal(true)
                                ->showCameraSelector(true)
                                ->aspect('16:9')
                                ->imageQuality(80)
                                ->shouldDeleteOnEdit(false),
                            // SignaturePad::make('foto')
                            //     ->label('Foto')
                            //     ->dotSize(2.0)
                            //     ->lineMinWidth(0.5)
                            //     ->lineMaxWidth(2.5)
                            //     ->throttle(16)
                            //     ->minDistance(2)
                            //     ->velocityFilterWeight(0.7)
                            //     ->backgroundColor('rgba(0,0,0,0)')  // Background color on light mode
                            //     ->backgroundColorOnDark('#f0a')     // Background color on dark mode (defaults to backgroundColor)
                            //     ->exportBackgroundColor('#f00')     // Background color on export (defaults to backgroundColor)
                            //     ->penColor('#000')                  // Pen color on light mode
                            //     ->penColorOnDark('#fff')            // Pen color on dark mode (defaults to penColor)
                            //     ->exportPenColor('#0f0')            // Pen color on export (defaults to penColor)
                            //     ->clearable(true)
                            //     ->downloadable(false)
                            //     ->undoable(true)
                            //     ->confirmable(true),
                            DatePicker::make('tanggal_disahkan')
                                ->label('Tanggal Disahkan')
                                ->format('Y-m-d')
                                ->displayFormat('d F Y')
                                ->default(now()),
                        ])
                        ->columns(2),
                ])->skippable()
                ->columnSpanFull()
            ]);
    }
}
