<?php

namespace App\Filament\Dokter\Resources;

use App\Filament\Dokter\Resources\PasienResource\Pages;
use App\Filament\Dokter\Resources\PasienResource\RelationManagers;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

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
                 Tables\Columns\ImageColumn::make('foto')
                ->label('Foto ')
                ->getStateUsing(fn($record) => $record->foto
                    ? asset('storage/' . $record->foto)
                    : null)
                ->circular()
                ->height(60)
                ->width(60)
                ->extraImgAttributes(['style' => 'object-fit: cover'])
                ->size(50),
            Tables\Columns\TextColumn::make('nama')->label('Nama Lengkap'),
            Tables\Columns\TextColumn::make('jenis_kelamin')->label('Gender'),
            Tables\Columns\TextColumn::make('no_hp')->label('No. HP'),
            Tables\Columns\TextColumn::make('faskes.nama_faskes')->label('Faskes'),
            Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
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
            'index' => Pages\ListPasiens::route('/'),
            // 'create' => Pages\CreateJenisServis::route('/create'),
            // 'edit' => Pages\EditJenisServis::route('/{record}/edit'),
        ];
    }
}
