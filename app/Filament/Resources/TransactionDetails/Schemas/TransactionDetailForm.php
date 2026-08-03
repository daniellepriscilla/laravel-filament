<?php

namespace App\Filament\Resources\TransactionDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransactionDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('transaction_id')
                    ->relationship('transaction', 'name')
                    ->required(),

                Select::make('item_id')
                    ->relationship('item', 'name')
                    ->required(),

                TextInput::make('qty')
                    ->required()
                    ->numeric()
                    ->minValue(1),

                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
            ]);
    }
}