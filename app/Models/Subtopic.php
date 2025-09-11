<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\EvaluationItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtopic extends Model
{
    use HasFactory;
    protected $table = 'subtopics';
    protected $fillable = [
        'name',
        'order_number',
        'topic_id',
        'status'
    ];

    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function evaluation_items()
    {
        return $this->hasMany(EvaluationItem::class);
    }

}
