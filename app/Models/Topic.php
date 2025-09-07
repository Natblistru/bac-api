<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\TopicVideo;
use App\Models\TopicContentUnit;
use App\Models\TopicPresentation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    protected $fillable = [
        'name',
        'path',
        'content',
        'topic_content_unit_id',
        'status'
    ];

    protected $casts = [
        'content' => 'array',   // <= foarte important
    ];

    protected $with = ['topic_content_unit'];
    public function topic_content_unit() {
        return $this->belongsTo(TopicContentUnit::class, 'topic_content_unit_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(TopicVideo::class);
    }

    public function presentations()
    {
        return $this->hasMany(TopicPresentation::class);
    }


}
