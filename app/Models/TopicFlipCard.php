<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicFlipCard extends Model
{
    use HasFactory;
    protected $table = 'topic_flip_cards';
    protected $fillable = [
        'task',
        'answer',
        'topic_id',
        'order_number',
        'status'
    ];

    protected $with = ['topic'];
    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
