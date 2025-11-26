<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataTotal extends Model
{
    protected $fillable = [
        'vehicles',
        'parties',
        'users',
        'cases',
        'inspections',
        'documents'
    ];
}