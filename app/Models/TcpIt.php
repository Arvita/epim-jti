<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TcpIt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'email',
        'nama_tim',
        'perguruan_tinggi',
        'judul_proposal',
        'nama_ketua',
        'nama_anggota1',
        'nama_anggota2',
        'ktm',
        'proposal',
        'biodata',
    ];




    /**
     * Get the user that owns the TcpIt
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function setKtmAttribute($value)

    {

        $this->attributes['ktm'] = json_encode($value);

    }
}


