<?php

namespace App\Filament\Resources\HobbyResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class HobbyPostsRelationManager extends RelationManager
{
    protected static string $relationship = 'hobbyPosts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Toggle::make('ready')
                            ->required(),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\DatePicker::make('date')
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn (Forms\Set $set, $state) => $set('slug', Str::slug($state))
                            ),
                        Forms\Components\TextInput::make('slug')
                            ->required(),
                    ])
                    ->columns(3),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Textarea::make('summary')
                            ->rows(4)
                            ->required(),
                        Forms\Components\FileUpload::make('featured_image')
                            ->image()
                            ->required(),
                    ])
                    ->columns(2),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->required(),
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('summary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('ready')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
