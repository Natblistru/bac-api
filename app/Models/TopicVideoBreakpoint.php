<?php

namespace App\Models;

use App\Models\TopicVideo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicVideoBreakpoint extends Model
{
    use HasFactory;
    protected $table = 'topic_video_breakpoints';
    protected $fillable = [
        'name',
        'time',
        'seconds',
        'topic_video_id',
        'status'
    ];

    protected $with = ['topic_video'];
    public function topic_video() {
        return $this->belongsTo(TopicVideo::class, 'topic_video_id', 'id');
    }

}
