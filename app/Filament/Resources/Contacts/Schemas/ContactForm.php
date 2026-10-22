<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->disabled(),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->disabled(),
                        TextInput::make('phone')
                            ->maxLength(50)
                            ->disabled(),
                        TextInput::make('subject')
                            ->maxLength(255)
                            ->disabled(),
                    ])
                    ->columns(2),

                Section::make('Message')
                    ->schema([
                        Textarea::make('message')
                            ->rows(5)
                            ->disabled(),
                        Toggle::make('is_read')
                            ->label('Mark as Read'),
                    ]),
            ]);
    }
}
