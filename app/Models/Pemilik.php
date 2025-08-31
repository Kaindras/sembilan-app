<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemilik extends Model
{
    /** @use HasFactory<\Database\Factories\PemilikFactory> */
    use HasFactory;
    protected $guarded =[];

    public function kapals(): HasMany
    {
        return $this->hasMany(Kapal::class, 'pemilik_id');
    }
}
