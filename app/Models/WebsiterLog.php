<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiterLog extends Model
{
    protected $fillable = [
        "foreignId",
        "user_id",
        "IPaddres",
        "table_name",
        "tabel_id",
        "description",
        "created_ts"
    ];

    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($log) {
            if (empty($log->foreignId)) {
                $id = static::max("id") + 1;
                $log->foreignId = 'log-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}
