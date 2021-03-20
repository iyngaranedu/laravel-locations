<?php

namespace Iyngaran\Location;

use Illuminate\Support\Facades\Route;
use Iyngaran\Location\Commands\LocationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LocationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-locations')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_locations_table')
            ->hasCommand(LocationCommand::class);

        $this->registerApiRoutes();
    }

    private function registerApiRoutes()
    {
        Route::group(
            [
                'prefix' => "/api/".config('laravel-locations.url_prefix', 'app'),
                'middleware' => "api",
            ],
            function () {
                $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
            }
        );
    }
}
