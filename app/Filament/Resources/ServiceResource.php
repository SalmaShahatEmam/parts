<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\StudyDestination;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    public static function getNavigationGroup(): ?string
    {
        return __('Projects , Blog and services Data');
    }
    public static function getModelLabel(): string
    {
        return __('Service');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Services');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make(__('Service Information'))
                        ->description(__('This is the main information about the service.'))
                        ->collapsible(true)
                        ->schema([
                            TextInput::make('name_ar')
                                ->label(__('name_ar'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->unique(Service::class, 'name_ar', ignoreRecord: true)

                                ->required(),

                            TextInput::make('name_en')
                                ->required()
                                ->label(__('name_en'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->unique(Service::class, 'name_en', ignoreRecord: true)

                                ->autofocus()
                                ->lazy()
                                ->afterStateUpdated(function (Set $set, ?string $state) {
                                    $set('slug', str()->slug($state));
                                }),
                            TextInput::make('slug')
                                ->required()

                                ->unique(Service::class, 'slug', ignoreRecord: true)
                                ->disabled()
                                ->dehydrated(),

                        ])->columns(3),


                    Section::make(__('Description Information'))
                        ->description(__('This is the description information about the service.'))
                        ->collapsible(true)

                        ->schema([

                            Textarea::make('desc_ar')
                                ->label(__('desc_ar'))
                                ->minLength(3)

                                ->columnSpan(3)
                                ->rows(5)
                                ->required(),


                            Textarea::make('desc_en')
                                ->label(__('desc_en'))
                                ->minLength(3)

                                ->columnSpan(3)
                                ->rows(5)
                                ->required(),

                        ]),

                    Section::make(__('Images Information'))
                        ->description(__('This is the images information about the service.'))
                        ->collapsible(true)

                        ->schema([


                            FileUpload::make('icon')
                                ->label(__('icon'))
                                ->avatar()
                                ->disk('public')->directory('Service')
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->reorderable()

                                ->required(),


                            FileUpload::make('images')
                            ->label(__('image'))
                            ->multiple()
                             ->minFiles(1)
                            ->maxFiles(1) 
                            ->helperText(__('Upload 1 image for the service only'))

                            ->disk('public')->directory('Service')
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
                ImageColumn::make('icon')
                    ->label(__('icon'))
                    ->circular(),
                TextColumn::make('name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('name_' . app()->getLocale())),
                    TextColumn::make('desc_' . app()->getLocale())
                    ->wrap()
                    ->markdown()
                    ->words(50)
                    ->searchable()
                    ->label(__('desc_' . app()->getLocale())),
                    ImageColumn::make('images')
                    ->label(__('images'))
                    ->stacked()
                    ->circular(),


                // TextColumn::make('desc_' . app()->getLocale())
                //     ->searchable()
                //     ->label(__('desc_' . app()->getLocale()))
                //     ->wrap()
                //     ->words(50),


                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('Updated At'))
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

                ])
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
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
