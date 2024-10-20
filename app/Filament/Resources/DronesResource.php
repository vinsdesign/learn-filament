<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DronesResource\Pages;
use App\Filament\Resources\DronesResource\RelationManagers;
use App\Models\Drones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DronesResource extends Resource
{
    protected static ?string $model = Drones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                        Forms\Components\TextInput::make('drone_name')
                            ->label('drone_name')
                            ->required()
                            ->maxLength(255)->columnSpan(1),
                        Forms\Components\Select::make('model')
                            ->label('Model Drone')
                            ->required()
                            ->options([
                                'dji avata' => 'DJI Avata',
                               'dji avata 2' => 'DJI Avata 2',
                               'dji air 2' => 'DJI Air 2',
                            ]),
                        Forms\Components\TextInput::make('brand')
                            ->label('Brand')
                            ->maxLength(255)->columnSpan(1),
                        Forms\Components\select::make('airworthiness')
                            ->label('Airworthiness')   
                            ->options([
                                'good to fly' => 'Good to fly',
                               'maintenance due' => 'Maintenance due',
                               'grounded' => 'Grounded',
                            ])
                            ->required(),
                        Forms\Components\Select::make('operational')
                            ->label('Operational')
                            ->options([
                                '1' => 'Yes',
                                '0' => 'No',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('internalSerial')
                            ->label('Internal Serial')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('printedSerial')
                            ->label('Printed Serial')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('registration')
                            ->label('Registration')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('remoteID')
                            ->label('Remote ID')
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('purchased')
                            ->label('Purchased'),
                            
                        Forms\Components\Textarea::make('notes')
                            ->label('Notes')
                            ->maxLength(255),
                    ])->columns(3);
                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('drone_name')
                    ->label('Drone Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->label('Model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')->label('Brand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('airworthiness')->label('Airworthiness')
                    ->searchable(),
                Tables\Columns\TextColumn::make('operational')->label('Operational')
                    ->searchable(),
                Tables\Columns\TextColumn::make('internalSerial')->label('InternalSerial')
                    ->searchable(),
                Tables\Columns\TextColumn::make('printedSerial')->label('PrintedSerial')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remoteID')->label('remoteID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchased')->label('purchased')
                    ->searchable(),
                Tables\Columns\TextColumn::make('note')->label('note')
                    ->searchable(),
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
            'index' => Pages\ListDrones::route('/'),
            'create' => Pages\CreateDrones::route('/create'),
            'edit' => Pages\EditDrones::route('/{record}/edit'),
        ];
    }
}
