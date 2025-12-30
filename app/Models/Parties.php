<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
    protected $fillable = [
        'foreignId',
        'type',
        'name',
        'reg_code',
        'vat',
        'country',
        'email',
        'phone'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($partie) {
            if (empty($partie->foreignId)) {
                $id = static::max('id') + 1;
                $partie->foreignId = 'pty-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}