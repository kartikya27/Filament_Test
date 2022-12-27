<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\City;
use Filament\Forms\Components\Actions\Modal\Actions\Action;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function beforeCreate(): void
    {
        $this->data;
        $now = now();

        $insertArray = array_map(function ($v) use($now)
        {
            $v['state_id'] = $this->data['state_id'];
            $v['created_at'] = $now;
            $v['updated_at']= $now;
            return $v;
        }, $this->data['city']);

        City::insert($insertArray);


        $this->redirect($this->getRedirectUrl());
        $this->halt();
    }

   
}
