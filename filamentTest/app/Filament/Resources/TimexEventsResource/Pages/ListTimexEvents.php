<?php

namespace App\Filament\Resources\TimexEventsResource\Pages;

use App\Filament\Resources\TimexEventsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimexEvents extends ListRecords
{
    protected static string $resource = TimexEventsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
