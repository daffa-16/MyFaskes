<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KabkotaResource\Pages;
use App\Models\Kabkota;
use App\Models\Provinsi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KabkotaResource extends Resource
{
    protected static ?string $model = Kabkota::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kabkota')
                    ->label('Nama Kab/Kota')
                    ->required()
                    ->maxLength(150),

                Forms\Components\Select::make('provinsi_id')
                    ->label('Provinsi')
                    ->relationship('provinsi', 'nama_provinsi')
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kabkota')->label('Kab/Kota')->searchable(),
                Tables\Columns\TextColumn::make('provinsi.nama_provinsi')->label('Provinsi')->searchable(),
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
            'index' => Pages\ListKabkotas::route('/'),
            'create' => Pages\CreateKabkota::route('/create'),
            'edit' => Pages\EditKabkota::route('/{record}/edit'),
        ];
    }
}

