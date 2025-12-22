<?php

use App\Http\Controllers\SesstionController;

Route::controller(SesstionController::class)->group(function() {
    Route::get("/login", "index")->middleware("guest")->name("login");
    Route::post("/login", "store")->middleware("guest")->name("login.store");
    
    Route::post("/logout", "destroy")->middleware("auth")->name("logout");
})->name("sesstion.");