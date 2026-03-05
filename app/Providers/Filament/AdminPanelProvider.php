<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login() // Ceci génère la page de connexion automatique
            
            // 🎨 1. TES COULEURS SRM
            ->colors([
                'primary' => \Filament\Support\Colors\Color::hex('#2D9BD6'), // Bleu SRM pour les actions principales
                'warning' => \Filament\Support\Colors\Color::hex('#F19740'), // Orange SRM
                'gray' => \Filament\Support\Colors\Color::Slate, // Un gris élégant qui va bien avec le bleu
            ])
            
            // 🔤 2. TA POLICE D'ÉCRITURE
            ->font('Plus Jakarta Sans')
            
            // 🖼️ 3. TON LOGO ET NOM DE MARQUE
            ->brandName('SRM Casablanca-Settat')
            ->brandLogo(asset('images/logo_SRM.jpeg'))
            ->brandLogoHeight('3.5rem') // Hauteur du logo (ajustable si besoin)
            ->favicon(asset('images/logo_SRM.jpeg')) // L'icône dans l'onglet du navigateur
            
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                \Filament\Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                \Filament\Widgets\AccountWidget::class,
                \Filament\Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                \Illuminate\Cookie\Middleware\EncryptCookies::class,
                \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
                \Illuminate\Session\Middleware\StartSession::class,
                \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
                \Illuminate\Routing\Middleware\SubstituteBindings::class,
                \Illuminate\Session\Middleware\AuthenticateSession::class,
                \Filament\Http\Middleware\DisableBladeIconComponents::class,
                \Filament\Http\Middleware\DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                \Filament\Http\Middleware\Authenticate::class,
            ]);
    }}
