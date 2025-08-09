<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Grids extends Model
{
    /** @use HasFactory<\Database\Factories\GridsFactory> */
    use HasFactory;
    public static function driver() : array {
        
        return [
                [
                        'driverId'=> 1,
                        'driverName' => 'Max Verstappen',
                        'constructor' => 'Redbull Racing',
                        'image' => asset('images/maxVerstappen.png'),
                   ], 
                   [
                        'driverId'=> 2,
                        'driverName' => 'Charles Lecrec',
                        'constructor' => 'Scuderia Ferarri',
                        'image' => asset('images/charlesLecrec.png'),
                   ], 
                   [
                        'driverId'=> 3,
                        'driverName' => 'Fernando Alonso',
                        'constructor' => 'Aston Martin',
                        'image' => asset('images/lewisHamiltonRed.png'),
                   ], 
            ];
    }

    public static function findDriver(int $driverId): array {

          $grid = Arr::first(static::driver(), fn($grid) => $grid['driverId'] == $driverId);

          if (!$grid){
               abort(404);
          }

          return $grid;

    }

}
