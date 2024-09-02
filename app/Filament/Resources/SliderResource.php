<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Slider;
use App\Models\Service;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
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
use App\Filament\Resources\SliderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function getNavigationGroup(): ?string
    {
        return __('Sliders and Partners Data');
    }
    public static function getModelLabel(): string
    {
        return __('Slider');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Sliders');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make(__('Slider Information'))
                        ->description(__('This is the main information about the slider.'))
                        ->collapsible(true)
                        ->schema([
                            TextInput::make('name_ar')
                                ->label(__('name_ar'))
                                ->minLength(3)
                                ->maxLength(255)

                                ->required(),

                            TextInput::make('name_en')
                                ->required()
                                ->label(__('name_en'))
                                ->minLength(3)
                                ->maxLength(255)

                                ->autofocus(),



                        ])->columns(2),


                    Section::make(__('Description Information'))
                        ->description(__('This is the description information about the slider.'))
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
                        ->description(__('This is the images information about the slider.'))
                        ->collapsible(true)

                        ->schema([



                            FileUpload::make('image')
                                ->label(__('image'))
                                ->disk('public')->directory('Slider')
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->reorderable()

                                ->required(),

                            FileUpload::make('background_image')
                                ->label(__('background_image'))
                                ->disk('public')->directory('Slider')
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
                ImageColumn::make('background_image')
                    ->label(__('background_image'))
                    ->circular(),
                TextColumn::make('name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('name_' . app()->getLocale())),

                TextColumn::make('desc_' . app()->getLocale())
                    ->searchable()
                    ->label(__('desc_' . app()->getLocale()))
                    ->wrap()
                    ->words(50),
                ImageColumn::make('image')
                    ->label(__('image'))
                    ->circular()
                    ->stacked(),

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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
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
