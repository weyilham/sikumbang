<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{

    
    
    public function answers()
    {
        return $this->hasMany(Answer::class, 'children_id');
    }
   
}
