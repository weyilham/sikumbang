<?php

namespace App\Filament\Resources;

use App\Filament\Exports\ReportExporter;
use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Reports';

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
                TextColumn::make('children.name') // Nama kategori dari relasi
                ->label('Nama Anak')
                ->sortable()
                ->searchable(),
                TextColumn::make('children.parent_name') // Nama kategori dari relasi
                ->label('Nama Orang Tua'),
                TextColumn::make('children.birth_date') // Nama kategori dari relasi
                ->label('Tgl Lahir Anak'),
                TextColumn::make('value')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Sesuai umur' => 'success',
                    'Meragukan' => 'warning',
                    'Ada kemungkinan penyimpangan!' => 'danger',
                })
                ->label('Hasil')
                ->searchable()
                ->sortable(),
                TextColumn::make('description')
                ->label('Deskripsi')
                ->wrap()// Nama kategori dari relasi
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                ExportAction::make()->exporter(ReportExporter::class),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function canCreate(): bool
    {
        return false; // Menghilangkan tombol Add
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }

}
