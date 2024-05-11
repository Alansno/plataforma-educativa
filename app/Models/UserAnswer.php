<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $table = "users_answers";

    protected $fillable = [
        'user_id',
        'answer_id',
        'course_id',
    ];
}
