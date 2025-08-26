<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvaluationAnswer extends Model
{
    use HasFactory;
    protected $table = 'student_evaluation_answers';
    protected $fillable = [
        'points',
        'content_student',
        'student_id',
        'evaluation_answer_option_id',
        'status'
    ];

    protected $casts = [
        'content_student' => 'array',   // <= foarte important
    ];

    protected $with = ['evaluation_answer_option', 'student'];
    public function evaluation_answer_option() {
        return $this->belongsTo(EvaluationAnswerOption::class, 'evaluation_answer_option_id', 'id');
    }
    public function student() {
        return $this->belongsTo(Student::class, 'studentn_id', 'id');
    }
}
