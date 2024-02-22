<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnounceResource\Pages;
use App\Filament\Resources\AnnounceResource\RelationManagers;
use App\Models\Announce;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\MarkdownEditor;

class AnnounceResource extends Resource
{
    protected static ?string $model = Announce::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('masjid'),
                MarkdownEditor::make('content'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('masjid'),
                TextColumn::make('content'),
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
            'index' => Pages\ListAnnounces::route('/'),
            'create' => Pages\CreateAnnounce::route('/create'),
            'edit' => Pages\EditAnnounce::route('/{record}/edit'),
        ];
    }    
}
