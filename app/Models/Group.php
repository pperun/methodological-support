<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Group extends Model
{
    use HasFactory, Actionable;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
