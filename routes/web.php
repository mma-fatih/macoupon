<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/county/city', [CityController::class, 'getCities']);
Route::get('/county/district/{city_id}', [DistrictController::class, 'getDistricts']);