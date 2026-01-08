<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = [
        "foreignId",
        "external_ref",
        "status",
        "priority",
        "arrival_ts",
        "checkpoint_id",
        "origin_country",
        "destination_country",
        "risk_flags",
        "declarant_id",
        "consignee_id",
        "vehicle_id"
    ];
    protected $casts = [
        "risk_flags" => "array"
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($case) {
            if (empty($case->foreignId)) {
                $id = static::max("id") + 1;
                $case->foreignId = 'case-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}