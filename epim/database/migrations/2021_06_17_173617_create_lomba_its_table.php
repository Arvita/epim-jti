<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLombaItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba_its', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->string('nis');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->integer('usia');
            $table->string('no_wa');
            $table->string('nama_pendamping');
            $table->integer('nip');
            $table->string('no_wa_pendamping');
            $table->string('foto_ketua');
            $table->string('kartu_pelajar');
            $table->string('foto_peserta1');
            $table->string('foto_peserta2');
            $table->string('foto_peserta3');
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
        Schema::dropIfExists('lomba_its');
    }
}
