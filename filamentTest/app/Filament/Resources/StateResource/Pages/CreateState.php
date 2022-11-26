<?php

namespace App\Filament\Resources\StateResource\Pages;

use App\Filament\Resources\StateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateState extends CreateRecord
{
    protected static string $resource = StateResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['state'] = ucfirst($data['state']);
     
        return $data;
    }

    protected function getRedirectUrl(): string
        {
            return $this->getResource()::getUrl('index');
        }
}
