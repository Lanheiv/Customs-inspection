<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::controller(AdminController::class)->middleware("auth", "rolechecker:admin")->group(function() {
    Route::get("/admin", "index");

    Route::get("/admin/user/create", "create");
    Route::post("/admin/user/create", "store");

    Route::get("/admin/user/{id}", "edit");
    Route::post("/admin/user/{id}", "update");
});