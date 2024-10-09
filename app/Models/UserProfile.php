<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'user_id', 
        'name',  
        'date_of_birth', 
        'angkatan',
        'email',
        'phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
