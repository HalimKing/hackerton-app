<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
