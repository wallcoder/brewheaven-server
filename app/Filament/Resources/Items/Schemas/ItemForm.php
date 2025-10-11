<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                     Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                    Select::make('parent_id')->relationship('parent', 'name'),
                TextInput::make('name')->placeholder("Enter Name")
                    ->required(),
                TextInput::make('price')
                    ->required()->placeholder("Enter Price")
                    ->numeric()
                    ->prefix('$'),
                FileUpload::make('image')
                    ->image()->imageEditor()->columnSpanFull()->imageCropAspectRatio('1:1')
                    ->required(),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                ])->columnSpanFull()->columns(3)

            ]);
    }
}
