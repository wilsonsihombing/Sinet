<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryEvent extends Model
{

    protected $table = 'galleries';

    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'event_package_id',
        'image',
    ];

    protected $hidden = [
        
    ];

    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'event_package_id', 'id');
    }

}
