<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
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
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
        Vite::prefetch(concurrency: 3);

        View::share('settings', Settings::pluck('description', 'title')->toArray());
    }
}
