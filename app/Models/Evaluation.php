<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = 'evaluations';
    protected $fillable = [
        'name',
        'year',
        'subject_id',
        'profil',
        'type',
        'status'
    ];
    protected $with = ['subject'];
    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

}
