<?php

use Illuminate\Support\Facades\Route;
use Iyngaran\Location\Http\Controllers\LocationController;
use Iyngaran\Location\Http\Controllers\SubLocationController;

Route::group(
    ['prefix' => 'locations', 'as' => 'locations.'],
    function () {
        Route::get('/slug/{location:slug}', [LocationController::class,'showBySlug'])
            ->name('locations.slug');

        Route::get('/countries', [LocationController::class,'index'])
            ->name('countries');

        Route::get('/{location}', [LocationController::class,'show'])
            ->name('locations.show');

        Route::get('/states/{location}', SubLocationController::class)
            ->name('states');

        Route::get('/cities/{location}', SubLocationController::class)
            ->name('cities');
    }
);
