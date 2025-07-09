<?php

namespace App\Filament\Dokter\Resources;

use App\Filament\Pasien\Resources\FaskesResource\Pages;
use App\Filament\Pasien\Resources\FaskesResource\RelationManagers;
use App\Models\Faskes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaskesResource extends Resource
{
    protected static ?string $model = Faskes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
        return false; 
    }

    public static function canEdit(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false; 
    }
    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false; 
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaskes::route('/'),
            // 'create' => Pages\CreateJenisServis::route('/create'),
            // 'edit' => Pages\EditJenisServis::route('/{record}/edit'),
        ];
    }
}
