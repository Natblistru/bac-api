<?php

namespace App\Models;

use App\Models\EvaluationAnswer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluationQuestion extends Model
{
    use HasFactory;
    protected $table = 'evaluation_questions';
    protected $fillable = [
        'task',
        'hint',
        'placeholder',
        'content_settings',
        'order_number',
        'evaluation_item_id',
        'status'
    ];

    protected $casts = [
        'task'             => 'array',        // JSON -> array
        'hint'             => 'array',        // JSON -> array
        'content_settings' => 'array',        // JSON -> array
    ];

    // protected $with = ['evaluation_item'];
    public function evaluation_item() {
        return $this->belongsTo(EvaluationItem::class, 'evaluation_item_id', 'id');
    }

    public function evaluation_answers()
    {
        return $this->hasMany(EvaluationAnswer::class, 'evaluation_question_id', 'id');
    }
}
