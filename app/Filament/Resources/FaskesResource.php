<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaskesResource\Pages;
use App\Models\Faskes;
use App\Models\Jenisfaskes;
use App\Models\Kategori;
use App\Models\Kabkota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FaskesResource extends Resource
{
    protected static ?string $model = Faskes::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_faskes')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis_id')
                    ->label('Jenis Faskes')
                    ->relationship('jenis', 'nama_jenis')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama_kategori')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('kabkota_id')
                    ->label('Kabupaten/Kota')
                    ->relationship('kabkota', 'nama_kabkota')
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_faskes')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->limit(30),
                Tables\Columns\TextColumn::make('jenis.nama_jenis')->label('Jenis'),
                Tables\Columns\TextColumn::make('kategori.nama_kategori')->label('Kategori'),
                Tables\Columns\TextColumn::make('kabkota.nama_kabkota')->label('Kab/Kota'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
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
            'index' => Pages\ListFaskes::route('/'),
            'create' => Pages\CreateFaskes::route('/create'),
            'edit' => Pages\EditFaskes::route('/{record}/edit'),
        ];
    }
}
