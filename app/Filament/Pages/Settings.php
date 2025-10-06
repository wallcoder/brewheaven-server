<?php

namespace App\Filament\Pages;

use App\Settings\SIteSettings;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class Settings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SiteSettings::class;

    protected static ?int $navigationSort = 10;
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                      TextInput::make('site_name'),
                ])->columnSpanFull()->columns(3)

            ]);
    }
}
