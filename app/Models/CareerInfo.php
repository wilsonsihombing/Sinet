<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CareerInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'info_karier'; // Nama tabel di database

    // Kolom yang bisa diisi
    protected $fillable = [
        'title',
        'description',
        'posted_date',
        'expired_date',
        'posted_by',
    ];
}
