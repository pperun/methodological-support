<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
