<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SesstionController;
use App\Http\Controllers\UserController;

Route::redirect("/", "/login")->middleware("guest");
Route::get("/", function() { return view("index"); })->middleware("auth");

Route::controller(SesstionController::class)->group(function() {
    Route::post("/login", "store")->middleware("guest")->name("store");
    Route::get("/login", "index")->middleware("guest")->name("index");
    
    Route::get("/logout", "destroy")->middleware("auth")->name("destroy");
})->name("sesstion.");











/*

Route::get('/test', function() { return view("test"); })->middleware('rolechecker:admin');

Route::group(['prefix' => '/'], function()
{
    if ( Auth::check() ) // use Auth::check instead of Auth::user
    {
        Route::get('/', 'PagesController@logged_in_index');
    } else{
        Route::get('/', 'PagesController@guest_index');
    }
}); 

*/