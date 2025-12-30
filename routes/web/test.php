<?php // Random root koda fragmenti kas ir atrasti internetā vēlākai izmanotšanai vai testēšanai

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