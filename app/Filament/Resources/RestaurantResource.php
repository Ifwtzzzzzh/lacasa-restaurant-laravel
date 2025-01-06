<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RestaurantResource\Pages;
use App\Filament\Resources\RestaurantResource\RelationManagers;
use App\Models\Restaurant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use IbrahimBougaoua\FilamentRatingStar\Forms\Components\RatingStar;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RestaurantResource extends Resource
{
    protected static ?string $model = Restaurant::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Restaurant Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Restaurant Name')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->image('restaurants')
                                    ->previewable()
                                    ->required(),
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->debounce(500)
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required(),
                                Forms\Components\Select::make('city_id')
                                    ->relationship('city', 'name')
                                    ->required(),
                                Forms\Components\Textarea::make('address')
                                    ->required(),
                                RatingStar::make('rating')
                                    ->required(),
                                Forms\Components\Textarea::make('description')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Menu')
                            ->schema([
                                Forms\Components\Repeater::make('menus')
                                    ->relationship('menus')
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required(),
                                        Forms\Components\Select::make('category_id')
                                            ->relationship('category', 'name')
                                            ->required(),
                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->directory('bonuses')
                                            ->required(),
                                        Forms\Components\TextInput::make('price')
                                            ->required(),
                                    ])
                            ]),
                        Tabs\Tab::make('Restaurant Table')
                            ->schema([
                                Forms\Components\Repeater::make('restaurant_tables')
                                    ->relationship('restaurant_tables')
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required(),
                                        Forms\Components\TextInput::make('capacity')
                                            ->required(),
                                        Forms\Components\Toggle::make('is_available')
                                            ->required(),
                                    ])
                            ]),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn ($state) => str_repeat('⭐', $state)),
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRestaurants::route('/'),
            'create' => Pages\CreateRestaurant::route('/create'),
            'edit' => Pages\EditRestaurant::route('/{record}/edit'),
        ];
    }
}