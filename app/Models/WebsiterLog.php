<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiterLog extends Model
{
    protected $fillable = [
        'foreignId',
        'user_id',
        'tabel',
        'tabel_id',
        'description'
    ];
}
