<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChildrenResource\Pages;
use App\Models\Children;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ChildrenResource extends Resource
{
    protected static ?string $model = Children::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Data Management';


    public static function form(Form $form): Form
    {
        
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->rules(['string', 'max:255']),
    
            TextInput::make('parent_name')
                ->required()
                ->maxLength(255)
                ->rules(['string', 'max:255']),
    
            DatePicker::make('birth_date')
                ->required()
                ->rules(['date']),
    
            Select::make('gender')
                ->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ])
                ->required()
                ->rules(['in:Laki-laki,Perempuan']),
    
            RichEditor::make('address')
                ->columnSpan(2)
                ->required()
                ->rules(['string']),
    
            TextInput::make('phone_number')
                ->type('number')
                ->numeric()
                ->minValue(0)
                ->maxLength(15)
                ->required()
                ->rules(['numeric', 'digits_between:1,15']),
    
            TextInput::make('weight')
                ->numeric()
                ->minValue(0)
                ->required()
                ->rules(['numeric', 'min:0']),
    
            TextInput::make('height')
                ->numeric()
                ->minValue(0)
                ->required()
                ->rules(['numeric', 'min:0']),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('parent_name')->searchable(),
                Tables\Columns\TextColumn::make('birth_date')->sortable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('height'),
            ])
            ->filters([
                //filter
                Tables\Filters\SelectFilter::make('gender')
                ->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListChildrens::route('/'),
            'create' => Pages\CreateChildren::route('/create'),
            'edit' => Pages\EditChildren::route('/{record}/edit'),
        ];
    }
}
