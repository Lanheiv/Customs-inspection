<?php

use App\Http\Controllers\UserController;

Route::get("/account", [UserController::class, "index"]);
Route::post("/account", [UserController::class, "update"]);

