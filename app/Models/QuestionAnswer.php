<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory;

    protected $table = "questions_answers";

    protected $fillable = [
        'question_id',
        'answer_id',
        'isCorrect',
    ];
}
