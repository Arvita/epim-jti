<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpoIt extends Model
{
    use HasFactory;

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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setKtmAttribute($value)

    {

        $this->attributes['ktm'] = json_encode($value);

    }

    public function setFotoProdukAttribute($value)

    {

        $this->attributes['foto_produk'] = json_encode($value);

    }

    public function setTwibbonAttribute($value)

    {

        $this->attributes['twibbon'] = json_encode($value);

    }

    public function setKategoriProdukAttribute($value)

    {

        $this->attributes['kategori_produk'] = json_encode($value);

    }
}
