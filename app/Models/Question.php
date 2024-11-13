<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['question', 'option', 'is_correct', 'quiz_id', 'module_id', 'course_id'];
    public function option ()
    {
        return $this->hasMany(Option::class);
    }
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);   
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    } 

}
