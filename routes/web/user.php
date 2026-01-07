<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SesstionController;

Route::controller(SesstionController::class)->group(function() {
    Route::get("/login", "index")->middleware("guest")->name("login");
    Route::post("/login", "store")->middleware("guest");
    
    Route::get("/logout", "destroy")->middleware("auth");
});

Route::middleware("auth")->controller(UserController::class)->group(function() {
    Route::get("/user/{id}", "edit");
    Route::post("/user/{id}", "update");
});