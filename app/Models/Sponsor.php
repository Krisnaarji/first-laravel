<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Sponsor extends Model
{
    /** @use HasFactory<\Database\Factories\SponsorsFactory> */
    use HasFactory;

    public function grid(): BelongsToMany
    {
        return $this->belongsToMany(Grid::class);
    }


}
