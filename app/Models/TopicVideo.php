<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\TopicVideoBreakpoint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicVideo extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'topic_videos';
    protected $fillable = [
        'title',
        'source',
        'topic_id',
        'status'
    ];

    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function breakpoints()
    {
        return $this->hasMany(TopicVideoBreakpoint::class, 'topic_video_id', 'id')
                    ->orderBy('seconds'); // ordonează crescător
    }
}
