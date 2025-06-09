<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KosResource\Pages;
use App\Filament\Resources\KosResource\RelationManagers;
use App\Models\Kos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KosResource extends Resource
{
    protected static ?string $model = Kos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('keterangan')
                    ->required(),

                Forms\Components\TextInput::make('harga')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('nomor_kamar')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('status')
                    ->options([
                        'tersedia' => 'tersedia',
                        'tidak tersedia' => 'tidak tersedia',
                    ])
                    ->default('tersedia')
                    ->required(),

                Forms\Components\FileUpload::make('gambar')
                    ->directory('gambar_kos')
                    ->disk('public')
                    ->imageEditor()
                    ->imagePreviewHeight('200px')
                    ->required()
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->limit(50)
                    ->sortable(),

                Tables\Columns\TextColumn::make('harga')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nomor_kamar')
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('public')
                    ->circular()
                    ->height(50),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListKos::route('/'),
            'create' => Pages\CreateKos::route('/create'),
            'edit' => Pages\EditKos::route('/{record}/edit'),
        ];
    }
}
