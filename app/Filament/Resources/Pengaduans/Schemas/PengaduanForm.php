<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('name')
                    ->label('Nama kegiatan')
                    ->required(),
                Select::make('status')
                    ->options(['menunggu' => 'Menunggu', 'proses' => 'Proses', 'selesai' => 'Selesai'])
                    ->default('menunggu')
                    ->required(),
                TextArea::make('description')
                    ->required(),
                TextInput::make('tempat')
                    ->required(),
                TextInput::make('feedback')
                    ->hiddenOn('create')
                    ->default(null),
            ]);
    }
}
