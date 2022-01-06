<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'point',
        'exam_id',
    ];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }

}
