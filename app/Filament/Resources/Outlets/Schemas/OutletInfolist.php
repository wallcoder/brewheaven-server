<?php

namespace App\Filament\Resources\Outlets\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OutletInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('address'),
                TextEntry::make('open_time')
                    ->time(),
                TextEntry::make('close_time')
                    ->time(),
                TextEntry::make('phone'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
