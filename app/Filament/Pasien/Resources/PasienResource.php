<?php

namespace App\Filament\Pasien\Resources;

use App\Filament\Resources\PasienResource\Pages;
use App\Models\Pasien;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Nette\Utils\ImageColor;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(150),

                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->required()
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ]),

                Forms\Components\TextInput::make('no_hp')
                    ->label('No. HP')
                    ->tel()
                    ->maxLength(20),

                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat'),

                Forms\Components\Select::make('faskes_id')
                    ->label('Faskes')
                    ->relationship('faskes', 'nama_faskes')
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('berat_badan')
                    ->label('Berat Badan (kg)')
                    ->default(0)
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(300), // asumsi batas berat maksimum pasien

                Forms\Components\FileUpload::make('foto')
                    ->label('Foto Pasien')
                    ->image()
                    ->disk('public')
                    ->directory('pasiens') // folder penyimpanan di storage/app/public/pasiens
                    ->visibility('public')
                    ->nullable()
                    ->maxSize(1024), // 1 MB


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
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }
}
