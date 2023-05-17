<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Actions\Actionable;

class Admin extends Authenticatable
{
    use Notifiable, Actionable;

    protected $fillable = [
        'name',
        'email',
        'timezone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
