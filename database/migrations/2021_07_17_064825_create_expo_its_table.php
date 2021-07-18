<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpoItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expo_its', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_tim');
            $table->string('prodi');
            $table->string('semester');
            $table->string('email_ketua');
            $table->string('nama_ketua');
            $table->string('nomor_ketua');
            $table->string('email_anggota');
            $table->string('nama_anggota');
            $table->string('nama_produk');
            $table->string('kategori_produk');
            $table->string('deskripsi_produk');
            $table->string('manfaat_produk');
            $table->string('url_video');
            $table->string('url_aplikasi')->nullable();
            $table->text('ktm');
            $table->string('poster_produk');
            $table->text('foto_produk');
            $table->string('twibbon');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expo_its');
    }
}
