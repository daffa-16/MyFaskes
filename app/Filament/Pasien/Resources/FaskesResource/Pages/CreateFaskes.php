<?php

namespace App\Filament\Pasien\Resources\FaskesResource\Pages;

use App\Filament\Pasien\Resources\FaskesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFaskes extends CreateRecord
{
    protected static string $resource = FaskesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
