<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        if (app()->environment('local')) {
            return;
        }

        $siteUrl = rtrim((string) config('seo.url'), '/');

        if ($siteUrl === '') {
            return;
        }

        URL::forceRootUrl($siteUrl);
        URL::forceScheme(parse_url($siteUrl, PHP_URL_SCHEME) ?: 'https');
    }
}
