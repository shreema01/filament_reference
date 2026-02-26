<?php

namespace App\Filament\Resources\Users\Tables;
use Illuminate\Support\Facades\Auth;
use Filament\Actions\BulkActionGroup;
// use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name"),
                TextColumn::make("email"),
            ])
            
            ->filters([
                //
            ])
            
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
                ->visible(fn ($record) => $record->id !== Auth::id()),
            ])
            
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}
