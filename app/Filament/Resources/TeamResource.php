<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use Filament\Tables;
use App\Models\Team;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('Sliders , Team and Partners Data');
    }
    public static function getModelLabel(): string
    {
        return __('Team');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Teams');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make(__('Team Information'))
                        ->description(__('This is the main information about the team.'))
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


                    Section::make(__('Job Title Information'))
                        ->description(__('This is the job title information about the team.'))
                        ->collapsible(true)

                        ->schema([

                            TextInput::make('job_title_ar')
                                ->label(__('job_title_ar'))
                                ->minLength(3)


                                ->required(),


                                TextInput::make('job_title_en')
                                ->label(__('job_title_en'))
                                ->minLength(3)


                                ->required(),

                        ])->columns(2),

                    Section::make(__('Images Information'))
                        ->description(__('This is the images information about the team.'))
                        ->collapsible(true)

                        ->schema([



                            FileUpload::make('image')
                                ->label(__('image'))

                                ->disk('public')->directory('team')
                                ->columnSpanFull()
                                ->preserveFilenames()
                                ->reorderable()
                                ->columnSpanFull()

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
                    ->label(__('image'))
                    ->stacked()
                    ->circular(),
                TextColumn::make('name_' . app()->getLocale())
                    ->searchable()
                    ->label(__('name_' . app()->getLocale())),
                TextColumn::make('job_title_' . app()->getLocale())
                    ->wrap()
                    ->markdown()
                    ->words(50)
                    ->searchable()
                    ->label(__('job_title_' . app()->getLocale())),


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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
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
