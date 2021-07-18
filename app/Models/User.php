<?php

namespace App\Models;

use App\Models\TcpIt;
use App\Models\ExpoIt;
use App\Models\LombaIt;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'event',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the tcp_its for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tcp_its()
    {
        return $this->hasMany(TcpIt::class);
    }

    public function lomba_its()
    {
        return $this->hasMany(LombaIt::class);
    }

    public function expo_it()
    {
        return $this->belongsTo(ExpoIt::class);
    }


}
