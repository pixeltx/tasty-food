<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Location;
use App\Models\Setting;

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
        // Share location and settings with all views
        View::composer('*', function ($view) {
            $location = Location::first();
            $settings = Setting::all()->pluck('value', 'key');

            $view->with(compact('location', 'settings'));
        });
    }
}
