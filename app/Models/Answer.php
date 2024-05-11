<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'answer',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

    public function questions(): BelongsToMany {
        return $this->belongsToMany(Question::class, 'questions_answers')->withPivot('isCorrect');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'users_answers');
    }
}
