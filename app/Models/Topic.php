<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\TopicVideo;
use App\Models\TopicContentUnit;
use App\Models\TopicPresentation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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

    protected $appends = ['cover_url'];

    public function getCoverUrlAttribute()
    {
        if (!$this->path) return null;
        // return absolut, indiferent de config
        $rel = Storage::disk('public')->url($this->path);  // de ex. "/storage/polisemie.jpg"
        $base = rtrim(config('app.url') ?? '', '/');       // "http://localhost:8000"
        return str_starts_with($rel, 'http') ? $rel : $base.$rel;
    }

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
