<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    protected $fillable = [
        'name',
        'path',
        'subject_id',
        'status'
    ];

    protected $with = ['subject'];
    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

}
