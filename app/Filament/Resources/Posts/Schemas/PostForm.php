<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('summary')
                    ->rows(3)
                    ->maxLength(500)
                    ->helperText('Short preview shown in lists and cards')
                    ->columnSpanFull(),
                MarkdownEditor::make('body')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        ['bold', 'italic', 'strike', 'link'],
                        ['heading'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'],
                        ['undo', 'redo'],

                    ]),
                Toggle::make('published')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'title'),
            ]);
    }
}
