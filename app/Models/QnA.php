<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QnA extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'qna'; // Nama tabel

    protected $fillable = [
        'question',
        'answer',
        'posted_by',
        'answered_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'posted_by')
            ->withDefault([
                'name' => 'Pengguna tidak ditemukan',
            ]);
    }


}
