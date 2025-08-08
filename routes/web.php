<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['greeting' => 'hello', 'name' => 'lewis ngawilton']);
});

Route::get('/grids', function () {
    return view('grids', [
        'grids' => [
           [
                'driverId'=>'1',
                'driverName' => 'Max Verstappen',
                'constructor' => 'Redbull Racing'
           ], 
           [
                'driverId'=>'2',
                'driverName' => 'Charles Lecrec',
                'constructor' => 'Scuderia Ferarri'
           ], 
           [
                'driverId'=>'3',
                'driverName' => 'Fernando Alonso',
                'constructor' => 'Aston Martin'
           ], 
        ]
    ]);
});

Route::get('/grid/{driverId}', function ($driverId) {
    $grids = [
        [
                'driverId'=>'1',
                'driverName' => 'Max Verstappen',
                'constructor' => 'Redbull Racing'
           ], 
           [
                'driverId'=>'2',
                'driverName' => 'Charles Lecrec',
                'constructor' => 'Scuderia Ferarri'
           ], 
           [
                'driverId'=>'3',
                'driverName' => 'Fernando Alonso',
                'constructor' => 'Aston Martin'
           ], 
    ];

    $grid = Arr::first($grids, fn($grid) => $grid['driverId'] == $driverId);

    // dd($grid);

    return view('grid', ['grid' => $grid]);

});
    Route::get('/contact', function () {
        return view('contact');
});