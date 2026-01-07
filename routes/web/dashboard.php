<?php

use App\Http\Controllers\DashboardController;

Route::redirect("/", "/login")->middleware("guest");

Route::middleware('auth')->group(function() {
    Route::get("/", [DashboardController::class, "index"]);
    Route::get("/cases", [DashboardController::class, "casesIndex"]);
    Route::get("/inspections", [DashboardController::class, "inspectionsIndex"]);
    Route::get("/documents", [DashboardController::class, "documentsIndex"]); 
});