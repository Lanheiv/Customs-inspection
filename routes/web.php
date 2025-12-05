<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SesstionController;

Route::get("/", function() { return redirect("/login"); })->middleware("guest");
Route::get("/", function() { return view("index"); })->middleware("auth");

Route::controller(SesstionController::class)->group(function() {
    Route::post("/login", "store")->middleware("guest")->name("store");
    Route::get("/login", "index")->middleware("guest")->name("login");
    Route::get("/logout", "destroy")->middleware("auth")->name("destroy");
})->name("sesstion.");