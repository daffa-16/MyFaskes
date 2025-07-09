<?php

namespace App\Filament\Pasien\Resources\JenisfaskesResource\Pages;

use App\Filament\Pasien\Resources\JenisfaskesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisfaskes extends ListRecords
{
    protected static string $resource = JenisfaskesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
