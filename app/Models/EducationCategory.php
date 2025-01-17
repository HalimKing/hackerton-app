<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationCategory extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
