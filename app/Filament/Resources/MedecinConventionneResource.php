<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedecinConventionneResource\Pages;
use App\Filament\Resources\MedecinConventionneResource\RelationManagers;
use App\Models\MedecinConventionne;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class MedecinConventionneResource extends Resource
{
    protected static ?string $model = MedecinConventionne::class;
    protected static ?string $modelLabel = 'Médecin Conventionné';
    protected static ?string $pluralModelLabel = 'Médecins Conventionnés';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('specialite')
                    ->required()
                    ->label('Spécialité '),
                    
                TextInput::make('praticien')
                    ->label('Nom de la Clinique / Praticien')
                    ->required() // Ce champ est obligatoire
                    ->maxLength(255),
                    
                Textarea::make('adresse')
                    ->label('Adresse postale')
                    ->required()
                    ->columnSpanFull(), // Prend toute la largeur
                    
                TextInput::make('telephone')
                    ->required()
                    ->label('Numéro de téléphone')
                    ->tel(),
                    
                Textarea::make('accord_tarifaire')
                    ->label('Détails de l\'Accord Tarifaire')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('praticien')
                    ->label('Nom')
                    ->searchable() // Ajoute une barre de recherche magique !
                    ->sortable(),  // Permet de trier par ordre alphabétique
                    
                TextColumn::make('specialite')
                    ->label('Spécialité')
                    ->searchable(),
                    
                TextColumn::make('telephone')
                    ->label('Téléphone'),
                    
                TextColumn::make('accord_tarifaire')
                    ->label('Accord')
                    ->limit(100), // Coupe le texte s'il est trop long
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
            'index' => Pages\ListMedecinConventionnes::route('/'),
            'create' => Pages\CreateMedecinConventionne::route('/create'),
            'edit' => Pages\EditMedecinConventionne::route('/{record}/edit'),
        ];
    }
}
