<?php

namespace App\Models;


use App\Models\User;
use App\Models\Pemilik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kapal extends Model
{
    /** @use HasFactory<\Database\Factories\KapalFactory> */
    use HasFactory;

    protected $guarded = [];
    protected $with = ['inspektur', 'pemilik', 'sppd','abk'];

    public function inspektur(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pemilik(): BelongsTo
    {
        return $this->belongsTo(Pemilik::class);
    }

    public function sppd(): BelongsTo
    {
        return $this->belongsTo(Sppd::class, 'sppd_id','id');
    }

    public function abks(): HasMany
    {
        return $this->hasMany(Abk::class, 'kapal_id', 'id');
    }

    #[Scope]
    protected function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function($query , $search){
           return $query->where('nama_kapal', 'like', '%' . $search .'%');
        });

        // $query->when($filters['pemilik'] ?? false, function($query , $pemilik){
        //    return $query->whereHas('pemilik', 
        //    fn(Builder $query) =>
        //    $query->where('nama', $pemilik)
        // );
        // });

        // $query->when($filters['inspektur'] ?? false, function($query , $inspektur){
        //    return $query->whereHas('inspektur', 
        //    fn(Builder $query) =>
        //    $query->where('name', $inspektur)
        // );
        // });
    }
 
    
}
