<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\EvaluationSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluationItem extends Model
{
    use HasFactory;
    protected $table = 'evaluation_items';
    protected $fillable = [
        'task',
        'order_number',
        'evaluation_source_id',
        'topic_id',
        'status'
    ];

    protected $casts = [
        'task' => 'array', // ← important
    ];

    protected $with = ['evaluation'];
    public function evaluation_source() {
        return $this->belongsTo(EvaluationSource::class, 'evaluation_source_id', 'id');
    }
    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
