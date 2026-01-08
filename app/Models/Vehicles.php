<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = [
        "foreignId",
        "plate_no",
        "country",
        "make",
        "model",
        "vin"
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vehicle) {
            if (empty($vehicle->foreignId)) {
                $id = static::max("id") + 1;
                $vehicle->foreignId = 'veh-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}