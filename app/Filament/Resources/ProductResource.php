<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ean')
                            ->helperText('The EAN number / barcode of the product')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->minValue(0),
                        Forms\Components\FileUpload::make('image_path')
                            ->label('Image')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->directory('product')
                            ->visibility('public')
                            ->moveFiles() // move instead of copying tmp files
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file, Product $record) => "$record->id.{$file->extension()}"),
                        Forms\Components\Repeater::make('productCategories')
                            ->label('Categories')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->required(),
                            ]),
                        Forms\Components\Toggle::make('include_category_in_related_products'),
                        Forms\Components\Repeater::make('productRelatedProducts')
                            ->label('Related products')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('related_id')
                                    ->label('Product')
                                    ->relationship('related', 'name')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(2),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\DateTimePicker::make('created_at')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('updated_at')
                            ->disabled(),
                        Forms\Components\Toggle::make('is_active'),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->name('Image')
                    ->visibility('public')
                    ->circular()
                    ->defaultImageUrl(url('/images/product_placeholder.png'))
                    ->grow(false),
                Tables\Columns\TextColumn::make('ean')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->grow(),
                Tables\Columns\TextColumn::make('categories.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->placeholder('All')
                    ->trueLabel('Active')
                    ->falseLabel('Not active'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
