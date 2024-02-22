<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadualResource\Pages;
use App\Filament\Resources\JadualResource\RelationManagers;
use App\Models\Jadual;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;


class JadualResource extends Resource
{
    protected static ?string $model = Jadual::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('content'),
                FileUpload::make('image')->disk('public')->directory('thumbnails'),
                DateTimePicker::make('tarikh')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('content'),
                ImageColumn::make('image'),
                TextColumn::make('tarikh'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListJaduals::route('/'),
            'create' => Pages\CreateJadual::route('/create'),
            'edit' => Pages\EditJadual::route('/{record}/edit'),
        ];
    }    
}
