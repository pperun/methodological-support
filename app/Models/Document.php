<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class);
    }
}
