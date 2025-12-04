<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    protected $fillable = [
        'id',
        'username',
        'full_name',
        'password',
        'role',
        'active'
    ];
}