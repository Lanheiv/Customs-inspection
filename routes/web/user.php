<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SesstionController;

Route::controller(SesstionController::class)->group(function() {
    Route::get("/login", "index")->middleware("guest")->name("login");
    Route::post("/login", "store")->middleware("guest");
    
    Route::get("/logout", "destroy")->middleware("auth");
});

Route::controller(UserController::class)->middleware('auth')->group(function() {
    Route::get("/account", "index");
    Route::post("/account", "update");
});