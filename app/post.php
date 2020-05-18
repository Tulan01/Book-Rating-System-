<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $fillable = [
        'catagory_id', 'title', 'author','image','details',
    ];
}
