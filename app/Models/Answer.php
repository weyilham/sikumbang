<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['children_id', 'question_id', 'answer'];

    public function children()
    {
        return $this->belongsTo(Children::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
