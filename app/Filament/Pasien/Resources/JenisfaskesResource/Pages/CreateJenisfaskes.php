<?php

namespace App\Filament\Pasien\Resources\JenisfaskesResource\Pages;

use App\Filament\Pasien\Resources\JenisfaskesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJenisfaskes extends CreateRecord
{
    protected static string $resource = JenisfaskesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
