<?php

namespace App\Models;

use App\Models\Subtopic;
use App\Models\EvaluationSource;
use App\Models\EvaluationQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluationItem extends Model
{
    use HasFactory;
    protected $table = 'evaluation_items';
    protected $fillable = [
        'task',
        'short_source_content',
        'order_number',
        'evaluation_source_id',
        'subtopic_id',
        'status'
    ];

    protected $casts = [
        'task' => 'array', // ← important
        'short_source_content' => 'array', // ← important        
    ];


    public function evaluation_source() {
        return $this->belongsTo(EvaluationSource::class, 'evaluation_source_id', 'id');
    }
    public function subtopic() {
        return $this->belongsTo(Subtopic::class, 'subtopic_id', 'id');
    }

    public function evaluation_questions()
    {
        return $this->hasMany(EvaluationQuestion::class);
    }

}
