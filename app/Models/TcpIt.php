<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TcpIt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'nama_tim',
        'perguruan_tinggi',
        'judul_proposal',
        'nama_ketua',
        'nama_anggota1',
        'nama_anggota2',
        'ktm',
        'url_biodata',
        'bmc',
    ];
}
