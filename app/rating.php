<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $fillable = [
        'catagory_id', 'average',
    ];
}
