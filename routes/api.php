<?php

use Illuminate\Support\Facades\Route;
use Iyngaran\Location\Http\Controllers\LocationController;
use Iyngaran\Location\Http\Controllers\SubLocationController;

Route::group(
    ['prefix' => 'locations', 'as' => 'locations.'],
    function () {
        Route::get('/countries', LocationController::class)
            ->name('countries');

        Route::get('/states/{location}', SubLocationController::class)
            ->name('states');

        Route::get('/cities/{location}', SubLocationController::class)
            ->name('cities');
    }
);
