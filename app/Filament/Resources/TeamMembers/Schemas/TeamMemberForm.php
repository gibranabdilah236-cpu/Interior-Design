<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Member Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('role')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Creative Director'),
                        TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        Textarea::make('bio')
                            ->rows(3),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('photo')
                            ->image()
                            ->disk('public')       // Menentukan penyimpanan di disk public
                            ->directory('team')    // Folder tujuan: storage/app/public/team
                            ->visibility('public') // Memastikan izin file bersifat publik
                            ->maxSize(5120),
                    ]),

                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }
}