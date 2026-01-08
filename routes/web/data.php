<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function () {
    Route::post("/data/status/{id}", [DashboardController::class, "inspectionsResult"]);
    Route::get("/data/{id}", [DataController::class, "index"])->where('id', '[a-z]+-\d+');
});