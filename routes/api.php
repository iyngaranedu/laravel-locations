<?php

use Illuminate\Support\Facades\Route;
use Iyngaran\Location\Http\Controllers\LocationController;
use Iyngaran\Location\Http\Controllers\SubLocationController;

Route::group(
    ['prefix' => 'locations', 'as' => 'locations.'],
    function () {
        Route::get('/countries', LocationController::class)
            ->name('countries');

        Route::get('/states/{country}', SubLocationController::class)
            ->name('states');

        Route::get('/cities/{state}', SubLocationController::class)
            ->name('cities');
    }
);
