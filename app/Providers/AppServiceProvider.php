<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Force usage of https when loading vite resources on a production or staging server
        $isProduction = config('app.env') === 'production';
        $isStaging = config('app.env') === 'staging' || str(config('app.url'))->contains('staging');
        if ($isProduction || $isStaging) {
            URL::forceScheme('https');

            // Set that the request was made via https, because else signatures cannot get validated
            request()->server->set('HTTPS', request()->header('X-Forwarded-Proto', 'https') == 'https' ? 'on' : 'off');
        }
    }
}
