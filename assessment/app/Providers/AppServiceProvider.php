<?php

namespace App\Providers;

use App\Services\ScreenOneService;
use App\Services\ScreenOneServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ScreenOneServiceInterface::class, ScreenOneService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
