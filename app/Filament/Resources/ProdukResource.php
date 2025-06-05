<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('nama_produk')
                        ->required()
                        ->maxLength(255),
                    
                    Forms\Components\Textarea::make('deskripsi')
                        ->required()
                        ->rows(3),
                    
                    Forms\Components\TextInput::make('harga_sewa')
                        ->numeric()
                        ->required(),
                    
                    Forms\Components\TextInput::make('stok')
                        ->numeric()
                        ->required(),
    
                    Forms\Components\FileUpload::make('gambar')
                        ->required()
                        ->image()
                        ->disk('public')
                        ->directory('produk'),
    
                    Forms\Components\Select::make('kategori_id')
                        ->label('Kategori')
                        ->relationship('kategori', 'nama_kategori') // relasi di model
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_urut')
                    ->label('No.')
                    ->rowIndex(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(20),
                Tables\Columns\TextColumn::make('harga_sewa')
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('stok'),
                Tables\Columns\TextColumn::make('kategori_produk.nama_kategori')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function (Collection $record) {
                        foreach($record as $key => $value){
                            if($value->gambar) {
                                Storage::disk('public')->delete($value->gambar);
                            }
                        }
                    }),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
