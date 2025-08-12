<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Constructor extends Model
{
    /** @use HasFactory<\Database\Factories\ConstructorFactory> */
    use HasFactory;

    protected $table = 'constructors';

    public function grids(): HasMany
    {

        return $this->hasMany(Grid::class, 'constructor_id', 'constructor_id');
    }

}
