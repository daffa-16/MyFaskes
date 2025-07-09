<?php

namespace App\Filament\Pasien\Resources\FaskesResource\Pages;

use App\Filament\Pasien\Resources\FaskesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaskes extends ListRecords
{
    protected static string $resource = FaskesResource::class;

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
