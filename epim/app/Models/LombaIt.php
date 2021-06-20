<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LombaIt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'nama',
        'nis',
        'tempat_lahir',
        'jenis_kelamin',
        'usia',
        'no_wa',
        'nama_pendamping',
        'nip',
        'no_wa_pendamping',
        'foto_ketua',
        'kartu_pelajar',
        'foto_peserta1',
        'foto_peserta2',
        'foto_peserta3',
    ];
}
