<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Specialization extends Model
{
    use HasFactory, Actionable;

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
