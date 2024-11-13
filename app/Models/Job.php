<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    protected $fillable = [
        'title',
        'descriprion',
        'location',
        'salary',
        'url',
        'available'
    ];
}
