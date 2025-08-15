<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Arr;


class Grid extends Model
{

     //     /** @use HasFactory<\Database\Factories\GridsFactory> */
     use HasFactory;
     //     public static function driver() : array {

     //         return [
          //                 [
               //                         'driverId'=> 1,
               //                         'driverName' => 'Max Verstappen',
               //                         'constructor' => 'Redbull Racing',
               //                         'image' => asset('images/maxVerstappen.png'),
               //                    ],
               //                    [
                    //                         'driverId'=> 2,
                    //                         'driverName' => 'Charles Lecrec',
                    //                         'constructor' => 'Scuderia Ferarri',
                    //                         'image' => asset('images/charlesLecrec.png'),
                    //                    ],
                    //                    [
                         //                         'driverId'=> 3,
                         //                         'driverName' => 'Fernando Alonso',
                         //                         'constructor' => 'Aston Martin',
                         //                         'image' => asset('images/lewisHamiltonRed.png'),
                         //                    ],
                         //             ];
                         //     }

     protected $table = 'grids';

     protected $fillable = ['driver_name', 'racing_number','path'];

    //  public static function findDriver(int $driver_id): ?Grids {

    //       $grid = static::where('driver_id', $driver_id)->first();

    //       //$grid = Arr::first(static::all(), fn($grid) => $grid['driverId'] == $driverId);

    //       if (!$grid){
    //            abort(404);
    //       }

    //       return $grid;

    // }

    public function constructor(){

        return $this->belongsTo(Constructor::class);

    }

    /**
     * The sponsors that belong to the Grids
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sponsors(): BelongsToMany
    {
        return $this->belongsToMany(Sponsor::class);
    }

}
