<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use App\Filament\Resources\LocationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LocationResource\RelationManagers;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('name')
                // ->label('Location Name')
                // ->required(),

                Forms\Components\TextInput::make('address')
                    ->label('Search Address')
                    ->required(),

                Forms\Components\TextInput::make('latitude')
                    ->label('Latitude')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('longitude')
                    ->label('Longitude')
                    ->numeric()
                    ->required(),

                Map::make('location')
                ->defaultZoom(15)
                ->autocomplete('address') // ✅ specify the address field name here
                ->label('Pick Location')
                ->afterStateHydrated(function ($state, $set, $get) {
                    $lat = $get('latitude');
                    $lng = $get('longitude');
    
                    if (is_numeric($lat) && is_numeric($lng)) {
                        $set('location', [
                            'lat' => (float) $lat,
                            'lng' => (float) $lng,
                        ]);
                    }
                })
                ->afterStateUpdated(function ($state, $set) {
                    $set('latitude', $state['lat']);
                    $set('longitude', $state['lng']);
                })
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('name')
                //     ->label('Location Name')
                //     ->sortable()
                //     ->searchable(),

                Tables\Columns\TextColumn::make('address')
                    ->label('Address')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('latitude')
                    ->label('Latitude')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('longitude')
                    ->label('Longitude')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocations::route('/'),
            // 'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
        ];
    }
}
