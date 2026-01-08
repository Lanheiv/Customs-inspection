<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        "foreignId",
        "username",
        "full_name",
        "password",
        "role",
        "active"
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (empty($user->foreignId)) {
                $id = static::max("id") + 1;
                $user->foreignId = 'usr-' . str_pad($id, 6, '0', STR_PAD_LEFT);; // str_pad aizpilda līdz konkrētam daudzumamam no LEFT  // https://www.php.net/manual/en/function.str-pad.php
            }
        });
    }
}