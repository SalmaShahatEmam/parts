<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Forms\Components\BelongsToManySelect;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MultiSelect;
use App\Filament\Resources\BranchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BranchResource\RelationManagers;

class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;
    protected static ?string $navigationIcon = 'heroicon-o-map';
    public static function getNavigationGroup(): ?string
    {
        return __('Projects , Blog and services Data');
    }
    public static function getModelLabel(): string
    {
        return __('Branches');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Branches');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_en')
                    ->required(),
                Forms\Components\TextInput::make('title_ar')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->required(),
                Forms\Components\TextInput::make('lng')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('lat')
                    ->numeric()
                    ->required(),
                    MultiSelect::make('services') // Use MultiSelect for multiple selections
                ->relationship('services', 'name_en') // Using name_en for the label
                ->label('Select Services')
                ->required(),
        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title_en'),
            Tables\Columns\TextColumn::make('title_ar'),
            Tables\Columns\TextColumn::make('address'),
            Tables\Columns\TextColumn::make('phone'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }
}
