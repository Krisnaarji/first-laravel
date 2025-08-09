<?php

use Illuminate\Support\Facades\Route;

use App\Models\Grids;

Route::get('/', function () {
    return view('welcome', ['greeting' => 'hello', 'name' => 'lewis ngawilton']);
});

Route::get('/grids', function (){
    return view('grids', [
        'grids' => Grids::driver()
          
    ]);
});

Route::get('/grid/{driverId}', function ($driverId) {
    

    $grid = Grids::findDriver($driverId);

    // dd($grid);

    return view('grid', ['grid' => $grid]);

});
    Route::get('/contact', function () {
        return view('contact');
});