<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicDomain extends Model
{
    use HasFactory;
    protected $table = 'topic_domains';
    protected $fillable = [
        'name',
        'subject_id',
        'status'
    ];

    protected $with = ['subject'];
    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

}
