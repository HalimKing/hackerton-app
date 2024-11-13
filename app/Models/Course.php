<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['name', 'category_id'];

    public function questions ()
    {
        return $this->hasMany(Question::class);
    }

    public function category()
    {
        return $this->belongsTo(EducationCategory::class, 'category_id');
    }
}
