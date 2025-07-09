<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisfaskesResource\Pages;
use App\Models\Jenisfaskes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JenisfaskesResource extends Resource
{
    protected static ?string $model = Jenisfaskes::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_jenis')
                    ->label('Nama Jenis Faskes')
                    ->required()
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_jenis')->label('Jenis Faskes')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Diubah')->dateTime()->sortable(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJenisfaskes::route('/'),
            'create' => Pages\CreateJenisfaskes::route('/create'),
            'edit' => Pages\EditJenisfaskes::route('/{record}/edit'),
        ];
    }
}
