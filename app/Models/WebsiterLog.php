<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiterLog extends Model
{
    protected $fillable = [
        'foreignId',
        'user_id',
        'table_name',
        'tabel_id',
        'description'
    ];
}
