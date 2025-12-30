<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspections extends Model
{
    protected $fillable = [
        'foreignId',
        'case_id',
        'type',
        'requested_by',
        'start_ts',
        'location',
        'checks',
        'assigned_to'
    ];
    protected $casts = [
        'checks' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($partie) {
            if (empty($partie->foreignId)) {
                $id = static::max('id') + 1;
                $partie->foreignId = 'insp-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}
