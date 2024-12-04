<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QnA extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'qna';

    protected $fillable = [
        'question',
        'posted_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'posted_by')
            ->withDefault([
                'name' => 'Pengguna tidak ditemukan',
            ]);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'qna_id');
    }

    public function answeredBy()
    {
    return $this->belongsTo(User::class, 'answered_by')
        ->withDefault([
            'name' => 'Pengguna yang menjawab tidak ditemukan',
        ]);
    }

}
