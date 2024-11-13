<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    public function questions() 
    {
        return $this->hasMany(Question::class);
    }
    public function module() 
    {
        return $this->belongsTo(Module::class);
    }
}
