<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                DateTimePicker::make('date')
                    ->required(),

                TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                TextInput::make('pay_total')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
            ]);
    }
}