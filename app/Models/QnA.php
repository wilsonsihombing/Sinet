<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QnA extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'question', 
        'answer',
        'posted_by',
        'answered_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
