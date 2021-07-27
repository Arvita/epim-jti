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
        'user_id',
        'email',
        'nama_peserta',
        'asal_sekolah',
        'nis',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'usia',
        'no_wa_peserta',
        'nama_pendamping',
        'nip',
        'no_wa_pendamping',
        'foto_peserta',
        'kartu_pelajar',
        'surat_pernyataan',
        'bukti_pembayaran',
        'lampiran_guru',
    ];
}
