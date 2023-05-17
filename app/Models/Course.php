<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Course extends Model
{
    use HasFactory, Actionable;

    public function courseName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->educationLevel->name
                    .' '
                    .$this->course_year
                    .' '
                    .__('grade')
                    .' '
                    .$this->group->name
                    .' '
                    .$this->specialization->name;
            }
        );
    }

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
