<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orphan extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'address' , 'age', 'institute_id', 'city', 'zip', 'image'
    ];
}
