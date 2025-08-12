<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Grid;

Route::get('/', function () {

    return view('welcome', ['greeting' => 'hello', 'name' => 'lewis ngawilton']);

});

Route::get('/grids', function (){
    return view('grids', [
        'grids' => Grid::all()

    ]);
});

Route::get('/grid/{id}', function ($id) {


    // $grid = Grid::findDriver($driver_id);

    // dd($grid);

    return view('grid', ['grid' => Grid::find($id)]);

});
    Route::get('/contact', function () {
        return view('contact');
});
