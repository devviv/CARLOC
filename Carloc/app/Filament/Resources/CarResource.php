<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Resources\CarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

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
                FileUpload::make('img_path')
                    ->preserveFilenames()
                    ->directory('cars')
                    ->required()
                    ->unique()
                    ->getUploadedFileNameForStorageUsing(
                        function (TemporaryUploadedFile $file): string {
                            // Get the current date in a format you prefer
                            $currentDate = now()->format('Ymd_His');

                            // Get the original name of the file
                            $originalName = $file->getClientOriginalName();

                            // Append the current date to the end of the original name
                            $newFileName = str($currentDate)->append('_')->append($originalName)->__toString();

                            return $newFileName;
                        }
                    )
                    ->image(),
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
                ImageColumn::make('img_path')->disk('local'),
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
