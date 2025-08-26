<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicPresentation extends Model
{
    use HasFactory;
    protected $table = 'topic_presentations';
    protected $fillable = [
        'name',
        'path',
        'topic_id',
        'status'
    ];

    protected $with = ['topic'];
    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

}
