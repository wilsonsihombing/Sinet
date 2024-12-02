<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'date_of_birth', 
        'force',
        'address',
        'phone_number',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'date_of_birth' => 'datetime',
        ];
    }

    /**
     * Periksa apakah pengguna adalah admin.
     */
    public function isAdmin()
    {
        return $this->roles === 'ADMIN';
    } 


    public function careerInfos()
    {
        return $this->hasMany(CareerInfo::class, 'posted_by');
    }
    
    public function qnasPosted()
    {
        return $this->hasMany(QnA::class, 'posted_by');
    }

    public function qnasAnswered()
    {
        return $this->hasMany(QnA::class, 'answered_by');
    }

}
