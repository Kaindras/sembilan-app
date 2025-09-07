<?php

namespace App\Models;

use App\Models\Kapal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sppd extends Model
{
    /** @use HasFactory<\Database\Factories\SppdFactory> */
    use HasFactory;
    protected $guarded =[];
    public function kapal(): BelongsTo
    {
        return $this->belongsTo(Kapal::class);
    }
}
