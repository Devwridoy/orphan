<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    protected $fillable = [
        'institute_name', 'contact', 'address' , 'year', 'city'. 'zip'
    ];
}
