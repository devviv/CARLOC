<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required(),
                Forms\Components\TextInput::make('Modele')
                    ->required(),
                Forms\Components\TextInput::make('Description')
                    ->required(),
                Forms\Components\DatePicker::make('date_creation')
                    ->required(),
                Forms\Components\TextInput::make('prix_par_jour')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('vitesse')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('plaque')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('quantite')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nbre_passagers')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('img_path')
                    ->required(),
                Forms\Components\TextInput::make('numero_chassis')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('climatisation')
                    ->required(),
                Forms\Components\Toggle::make('disponible')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Modele')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_creation')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prix_par_jour')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vitesse')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('plaque')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantite')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nbre_passagers')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('img_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero_chassis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('climatisation')
                    ->boolean(),
                Tables\Columns\IconColumn::make('disponible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'view' => Pages\ViewCar::route('/{record}'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
