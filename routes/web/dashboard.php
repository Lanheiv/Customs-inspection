<?php

use App\Http\Controllers\DashboardController;

Route::redirect("/", "/login")->middleware("guest");
Route::get("/", [DashboardController::class, "index"])->middleware("auth");