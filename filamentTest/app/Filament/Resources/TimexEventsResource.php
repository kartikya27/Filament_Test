<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimexEventsResource\Pages;
use Buildix\Timex\Models\Event;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TimexEventsResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTimexEvents::route('/'),
            'create' => Pages\CreateTimexEvents::route('/create'),
            'edit' => Pages\EditTimexEvents::route('/{record}/edit'),
        ];
    }
}
