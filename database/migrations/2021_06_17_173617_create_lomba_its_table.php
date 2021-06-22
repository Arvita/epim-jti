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
            $table->foreignId('user_id');
            $table->string('email');
            $table->string('nama_peserta');
            $table->string('nis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->integer('usia');
            $table->string('no_wa_peserta');
            $table->string('nama_pendamping');
            $table->integer('nip');
            $table->string('no_wa_pendamping');
            $table->string('foto_peserta');
            $table->string('kartu_pelajar');
            $table->string('surat_pernyataan');
            $table->string('bukti_pembayaran');
            $table->string('lampiran_guru');
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
