<?php // random stuff to test :?

Route::get('/test', function() { return view("test"); })->middleware('rolechecker:admin');

Route::group(['prefix' => '/'], function()
{
    if ( Auth::check() )
    {
        Route::get('/', 'PagesController@logged_in_index');
    } else{
        Route::get('/', 'PagesController@guest_index');
    }
});

Route::get('/user/{name}', function (string $name) {
    // ...
})->where('name', '[A-Za-z]+');