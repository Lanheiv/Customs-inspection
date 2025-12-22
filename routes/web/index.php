<?php

use App\Http\Controllers\DashboardController;

Route::redirect("/", "/login")->middleware("guest");
Route::get("/", function () { return view("index"); })->middleware("auth");