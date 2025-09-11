<?php

namespace App\Models;

use App\Models\EvaluationQuestion;
use App\Models\EvaluationAnswerOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluationAnswer extends Model
{
    use HasFactory;
    protected $table = 'evaluation_answers';
    protected $fillable = [
        'task',
        'content',
        'max_points',
        'evaluation_question_id',
        'status'
    ];

    protected $casts = [
        'content' => 'array',        // JSON -> array
    ];

    // protected $with = ['evaluation_question'];
    public function evaluation_question() {
        return $this->belongsTo(EvaluationQuestion::class, 'evaluation_question_id', 'id');
    }

    public function evaluation_answer_options()
    {
        return $this->hasMany(EvaluationAnswerOption::class, 'evaluation_answer_id', 'id');
    }
}
