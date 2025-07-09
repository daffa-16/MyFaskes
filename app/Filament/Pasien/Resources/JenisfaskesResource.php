<?php

namespace App\Filament\Pasien\Resources;

use App\Filament\Pasien\Resources\JenisfaskesResource\Pages;
use App\Filament\Pasien\Resources\JenisfaskesResource\RelationManagers;
use App\Models\Jenisfaskes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisfaskesResource extends Resource
{
    protected static ?string $model = Jenisfaskes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Tables\Columns\TextColumn::make('nama_jenis')->label('Jenis Faskes')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Diubah')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListJenisfaskes::route('/'),
            // 'create' => Pages\CreateJenisServis::route('/create'),
            // 'edit' => Pages\EditJenisServis::route('/{record}/edit'),
        ];
    }
}
