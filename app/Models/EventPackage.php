<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventPackage extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
    ];

    protected $hidden = [
        
    ];

    public function galleryEvents()
    {
        return $this->hasMany(GalleryEvent::class, 'event_package_id', 'id');
    }
}
