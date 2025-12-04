<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SesstionController;

Route::get("/", function() { return redirect("/login"); })->middleware("guest");
Route::get("/", function() { return view("index"); })->middleware("auth");

Route::controller(SesstionController::class)->group(function() {
    Route::post("/login", "store")->middleware("guest")->name("store");
    Route::get("/login", "index")->middleware("guest")->name("login");
})->name("sesstion.");











/*

use App\Http\Controllers\OrderController;

 

Route::controller(OrderController::class)->group(function () {

    Route::get('/orders/{id}', 'show');

    Route::post('/orders', 'store');

});

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});

*/