<?php

namespace App\Filament\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
// use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;


class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 
            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('price')
                ->money('BDT')
                ->sortable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),


            SpatieMediaLibraryImageColumn::make('gallery')
            ->collection('gallery')
            ->limit(3)
            ->circular(),

        ])

            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}
