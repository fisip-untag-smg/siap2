<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Database\Eloquent\Model;

use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Model::unguard();
        Table::configureUsing(function (Table $table): void {
            $table
                ->emptyStateHeading('Masih Kosongan!')
                ->striped()
                ->defaultPaginationPageOption(10)
                ->paginated([10, 25, 50, 100])
                ->extremePaginationLinks()
                ->defaultSort('created_at', 'desc');
        });
        FilamentColor::register([
            'indigo' => Color::Indigo,
            'pink' => Color::Pink,
            'orange' => Color::Orange,
        ]);
    }
}
