<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


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
        /* Format date to show only the name of the month and the year */
        Blade::directive('formatDateFY', function ($date) {
            return "<?php echo \Carbon\Carbon::parse($date)->format('F Y'); ?>";
        });
    }
}
