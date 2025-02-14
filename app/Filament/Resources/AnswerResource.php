<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerResource\Pages;
use App\Filament\Resources\AnswerResource\RelationManagers;
use App\Models\Answer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Answers Users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('children.name') // Nama kategori dari relasi
                ->label('Category')
                ->sortable()
                ->searchable(),
                TextColumn::make('question.question') // Nama kategori dari relasi
                ->label('Question')
                ->limit(50)
                ->searchable(),
                TextColumn::make('answer')
                ->color(fn (string $state): string => match ($state) {
                    'yes' => 'success',
                    'no' => 'danger',
                })
                ->label('Answer'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ]);
    }

    public static function canCreate(): bool
    {
        return false; // Menghilangkan tombol Add
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
