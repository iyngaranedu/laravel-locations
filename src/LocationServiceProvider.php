<?php

namespace Iyngaran\Location;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Iyngaran\Location\Commands\LocationCommand;
use Illuminate\Support\Facades\Route;

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
