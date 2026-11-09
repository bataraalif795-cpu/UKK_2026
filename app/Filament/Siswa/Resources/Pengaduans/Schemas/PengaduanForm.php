<?php

namespace App\Filament\Siswa\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                    ->required(),
                Select::make('status')
                    ->options(['menunggu' => 'Menunggu', 'proses' => 'Proses', 'selesai' => 'Selesai'])
                    ->default('menunggu')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('tempat')
                    ->required(),
                TextInput::make('feedback')
                    ->default(null),
            ]);
    }
}
