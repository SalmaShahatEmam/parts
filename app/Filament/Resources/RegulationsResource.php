<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Regulations;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegulationsResource\Pages;
use App\Filament\Resources\RegulationsResource\RelationManagers;

class RegulationsResource extends Resource
{
    protected static ?string $model = Regulations::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-bangladeshi';

    public static function getNavigationGroup(): ?string

    {
        return null; //return __('Regulation Data');
    }
    public static function getModelLabel(): string
    {
        return __('Regulation');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Regulations');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make(__('Regulation Category Information'))
                        ->description(__('This is the main information about the regulation category.'))
                        ->collapsible(true)
                        ->schema([
                            TextInput::make('name_ar')
                                ->label(__('name_ar'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->unique(ignoreRecord: true)

                                ->required(),

                            TextInput::make('name_en')
                                ->required()
                                ->label(__('name_en'))
                                ->minLength(3)
                                ->maxLength(255)
                                ->unique(ignoreRecord: true)
                                ->autofocus(),
                            Select::make('category_id')
                                ->label(__('Regulation Categories'))
                                ->relationship(name: 'category', titleAttribute: 'name_' . app()->getLocale())
                                ->searchable()
                                ->preload()


                        ])->columns(1),

                    Section::make(__('PDF Information'))
                        ->description(__('This is the pdf information about the regulation.'))
                        ->collapsible(true)

                        ->schema([



                            FileUpload::make('pdf')
                                ->label(__('pdf'))
                                ->disk('public')->directory('pdf')
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->reorderable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxFiles(1)

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

                TextColumn::make('name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('name_' . app()->getLocale())),

                TextColumn::make('category.name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('Regulation Categories')),
                    TextColumn::make('pdf')
                    ->formatStateUsing(function (string $state) {

                        return $state ? __('read file') : 'No';
                    })
                    ->url(fn ($record) => $record->pdf_path,shouldOpenInNewTab: true)
                    ->label(__('pdf')),



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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegulations::route('/'),
            'create' => Pages\CreateRegulations::route('/create'),
            'edit' => Pages\EditRegulations::route('/{record}/edit'),
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
