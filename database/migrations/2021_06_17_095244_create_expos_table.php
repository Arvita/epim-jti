<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_tim');
            $table->string('prodi');
            $table->integer('semester');
            $table->string('nama_ketua');
            $table->string('nim_ketua');
            $table->string('email');
            $table->string('no_wa');
            $table->string('nama_anggota');
            $table->string('nim_anggota');
            $table->string('nama_produk');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('ktm');
            $table->string('image_produk');
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
        Schema::dropIfExists('expos');
    }
}
