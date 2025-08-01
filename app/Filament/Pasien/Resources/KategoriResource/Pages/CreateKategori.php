<?php

namespace App\Filament\Pasien\Resources\KategoriResource\Pages;

use App\Filament\Pasien\Resources\KategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategori extends CreateRecord

{
    protected static string $resource = KategoriResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
