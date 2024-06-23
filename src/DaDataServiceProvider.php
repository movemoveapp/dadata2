<?php

namespace MoveMoveApp\DaData2;

use Illuminate\Support\ServiceProvider;

class DaDataServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('dadata_organization', function () {
            return new OrganizationApi();
        });
        $this->app->singleton('dadata_address', function () {
            return new AddressApi();
        });
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/dadata.php' => config_path('dadata.php')
        ], 'dadata-config');
    }
}
