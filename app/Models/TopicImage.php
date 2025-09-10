<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicImage extends Model
{
    use HasFactory;
    protected $table = 'topic_images';
    protected $fillable = [
        'path',
        'topic_id',
        'status'
    ];

    public function topic() {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
