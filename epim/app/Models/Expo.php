<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_tim',
        'prodi',
        'semester',
        'nama_ketua',
        'nim_ketua',
        'email',
        'no_wa',
        'nama_anggota',
        'nim_anggota',
        'nama_produk',
        'kategori',
        'deskripsi',
        'ktm',
        'image_produk',
    ];
}
