<?php

namespace App\Filament\Resources\Properties\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
              
            TextInput::make('title')
                ->label('Property Title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->label('Description')
                ->rows(4),

            TextInput::make('price')
                ->label('Price')
                ->numeric()
                ->required(),

            SpatieMediaLibraryFileUpload::make('gallery')
            ->collection('gallery')
            ->multiple()
            ->reorderable()
            ->image()
            ->imagePreviewHeight('150')
            ->downloadable()
            ->openable()
            ->columnSpanFull(),
        ]);     
    }
}
