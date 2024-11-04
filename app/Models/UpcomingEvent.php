<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpcomingEvent extends Model
{
    use SoftDeletes;
    protected $table = 'upcomingevents';

    protected $fillable = [
        'title',
        'image',
    ];
}