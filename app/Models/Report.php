<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function children()
    {
        return $this->belongsTo(Children::class, 'children_id');
    }
}
