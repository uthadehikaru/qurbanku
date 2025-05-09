<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnimalResource\Pages;
use App\Filament\Resources\AnimalResource\RelationManagers;
use App\Models\Animal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnimalResource extends Resource
{
    protected static ?string $model = Animal::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationLabel = 'Hewan Qurban';

    protected static ?string $modelLabel = 'Hewan Qurban';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'sapi' => 'Sapi',
                        'kambing' => 'Kambing',
                        'domba' => 'Domba',
                        'kerbau' => 'Kerbau',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('image')
                    ->disk('public')
                    ->directory('animals')
                    ->image(),
                Forms\Components\RichEditor::make('description'),
                Forms\Components\Select::make('status')
                    ->options([
                        'available' => 'Tersedia',
                        'unavailable' => 'Tidak Tersedia',
                        'sold' => 'Terjual',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('image')
                    ->defaultImageUrl(asset('livestock.png')),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->suffix(' kg')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('idr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'available' => 'success',
                        'unavailable' => 'warning',
                        'sold' => 'danger',
                    })
                    ->formatStateUsing(fn (string $state): string => trans('app.status.' . $state))
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'sapi' => 'Sapi',
                        'kambing' => 'Kambing',
                        'domba' => 'Domba',
                        'kerbau' => 'Kerbau',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'available' => 'Tersedia',
                        'unavailable' => 'Tidak Tersedia',
                        'sold' => 'Terjual',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAnimals::route('/'),
        ];
    }
}
