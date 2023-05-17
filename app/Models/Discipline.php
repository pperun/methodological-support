<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Discipline extends Model
{
    use HasFactory, Actionable;

    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lector()
    {
        return $this->belongsTo(User::class);
    }

    public function practitioner()
    {
        return $this->belongsTo(User::class);
    }
}
