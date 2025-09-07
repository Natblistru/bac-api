<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicContentUnit extends Model
{
    use HasFactory;
    protected $table = 'topic_content_units';
    protected $fillable = [
        'name',
        'topic_domain_id',
        'status'
    ];

    protected $with = ['topic_domain'];
    public function topic_domain() {
        return $this->belongsTo(TopicDomain::class, 'topic_domain_id', 'id');
    }

}
