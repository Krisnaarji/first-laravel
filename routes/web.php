<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Grids;

Route::get('/', function () {

    return view('welcome', ['greeting' => 'hello', 'name' => 'lewis ngawilton']);

});

Route::get('/grids', function (){
    return view('grids', [
        'grids' => Grids::all()

    ]);
});

Route::get('/grid/{driver_id}', function ($driver_id) {


    $grid = Grids::findDriver($driver_id);

    // dd($grid);

    return view('grid', ['grid' => $grid]);

});
    Route::get('/contact', function () {
        return view('contact');
});
