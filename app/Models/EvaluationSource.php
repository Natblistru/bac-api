<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationSource extends Model
{
    use HasFactory;
    protected $table = 'evaluation_sources';
    protected $fillable = [
        'content',
        'order_number',
        'evaluation_id',
        'status'
    ];

    protected $casts = [
        'content' => 'array',   // <= foarte important
    ];

    protected $with = ['evaluation'];
    public function evaluation() {
        return $this->belongsTo(Evaluation::class, 'evaluation_id', 'id');
    }
}
