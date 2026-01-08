<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionsResults extends Model
{
    protected $fillable = [
        "foreignId",
        "inspection_id",
        "status",
        "reason"
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($data) {
            if (empty($data->foreignId)) {
                $id = static::max("id") + 1;
                $data->foreignId = 'inspres-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}
