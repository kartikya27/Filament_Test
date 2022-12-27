<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use App\Models\City;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Collection;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\BulkAction;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->requiresConfirmation(),

            // Action::make('Open'),//  ->requiresConfirmation(),,
            // Action::make('Back to Courses'),



        ];
    }



    protected function beforeCreate(): void
    {
        $this->data;
        $now = now();

        dd('heelo');
    }
}
