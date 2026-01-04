<?php

use App\Http\Controllers\DataController;

Route::get("/data/{id}", [DataController::class, "index"])->middleware('auth')->where('id', '[a-z]+-\d+');