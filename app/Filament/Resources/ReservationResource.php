<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tab')
                ->tabs([
                    Tabs\Tab::make('Reservation')
                        ->schema([
                            Forms\Components\TextInput::make('user_id')
                                ->default(fn () => Auth::id())
                                // ->disabled()
                                // ->hidden()
                                ->required(),
                            Forms\Components\Select::make('restaurant_id')
                                ->relationship('restaurant', 'name')
                                ->required(),
                            Forms\Components\Select::make('restaurant_table_id')
                                ->relationship('restaurant_table', 'name')
                                ->required(),
                            Forms\Components\DatePicker::make('start_date')
                                ->required(),
                        ]),
                    Tabs\Tab::make('Order')
                        ->schema([
                            Repeater::make('orders')
                                ->relationship('order')
                                ->schema([
                                    Forms\Components\Select::make('menu_id')
                                        ->relationship('menus', 'name')
                                        ->required(),
                                    Forms\Components\TextInput::make('quantity')
                                        ->numeric()
                                        ->required(),
                                ])
                        ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('restaurant.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('restaurant_table.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
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
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
