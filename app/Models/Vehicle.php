<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'color',
        'plate',
        'observation',
        'driver_id',
    ];

    public function driver(): BelongsTo {
        return $this->belongsTo(Driver::class);
    }
}
