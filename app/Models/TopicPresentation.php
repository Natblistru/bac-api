<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicPresentation extends Model
{
    use HasFactory;
    protected $table = 'topic_presentations';
    protected $fillable = [
        'name',
        'path',
        'topic_id',
        'thumbnail_path',
        'thumb_w',
        'thumb_h',
        'status'
    ];

    protected $appends = ['thumbnail_url'];

    public function getThumbnailUrlAttribute(): ?string
    {
        return $this->thumbnail_path
            ? Storage::disk('public')->url($this->thumbnail_path)
            : null;
    }

    protected $with = ['topic'];
    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

}
