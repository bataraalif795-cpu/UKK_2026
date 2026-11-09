<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Pengaduan;

class GetPengaduan extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
                Stat::make('Menunggu', Pengaduan::select()->where('status', 'menunggu')->count()),
                Stat::make('Proses', Pengaduan::select()->where('status', 'proses')->count()),
                Stat::make('Selesai', Pengaduan::select()->where('status', 'selesai')->count())
        ];
    }
}
