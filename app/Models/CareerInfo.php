<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CareerInfo extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'title', 
        'description',
        'posted_date',
        'expiry_date',
        'posted_by'
    ];

    public function postedBy()
    {
        return $this->belongsTo(User::class, 'posted_by', 'id');
    }
}
