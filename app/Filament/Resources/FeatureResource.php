<?php

namespace App\Filament\Resources;

use App\Models\Feature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section; // Correct import for Forms Section
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FeatureResource\Pages;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    public static function getNavigationGroup(): ?string
    {
        return __('Features Data');
    }

    public static function getModelLabel(): string
    {
        return __('Feature');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Features');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make(__('Features'))
                        ->description(__('Why CHoose parts and more'))
                        ->collapsible(true)
                        ->schema([
                            TextInput::make('name_ar')
                                ->label(__('Name (Arabic)'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->required(),

                            TextInput::make('name_en')
                                ->label(__('Name (English)'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->required()
                                ->autofocus()
                                ->lazy()
                                ->afterStateUpdated(function (Forms\Set $set, ?string $state) {
                                    $set('slug', str()->slug($state));
                                }),

                            TextInput::make('slug')
                                ->label(__('Slug'))
                                ->required()
                                ->unique(Feature::class, 'slug', ignoreRecord: true)
                                ->disabled()
                                ->dehydrated()

                        ])->columns(3),

                    Section::make(__('Description Information'))
                        ->description(__('This is the description information about the project.'))
                        ->collapsible(true)
                        ->schema([
                            Textarea::make('desc_ar')
                                ->label(__('Description (Arabic)'))
                                ->minLength(3)
                                ->columnSpan(3)
                                ->rows(5)
                                ->required(),

                            Textarea::make('desc_en')
                                ->label(__('Description (English)'))
                                ->minLength(3)
                                ->columnSpan(3)
                                ->rows(5)
                                ->required(),
                        ]),

                    Section::make(__('Images Information'))
                        ->description(__('This is the images information about the project.'))
                        ->collapsible(true)
                        ->schema([
                            FileUpload::make('image')
                                ->label(__('Image'))
                                ->disk('public')
                                ->directory('features')
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->reorderable()
                                ->required(),
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->latest('created_at');
            })
            ->columns([
                ImageColumn::make('image')
                    ->label(__('Image'))
                    ->circular(),

                TextColumn::make('name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('Name (' . app()->getLocale() . ')')),

                TextColumn::make('desc_' . app()->getLocale())
                    ->searchable()
                    ->label(__('Description (' . app()->getLocale() . ')'))
                    ->wrap()
                    ->words(50),

                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                ]),
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
            // Define relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeature::route('/create'),
            'edit' => Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}
