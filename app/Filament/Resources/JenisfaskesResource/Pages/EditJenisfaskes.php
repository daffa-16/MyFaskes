<?php

namespace App\Filament\Resources\JenisfaskesResource\Pages;

use App\Filament\Resources\JenisfaskesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisfaskes extends EditRecord
{
    protected static string $resource = JenisfaskesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
        
    }
          protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
