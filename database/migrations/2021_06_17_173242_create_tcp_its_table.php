<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcpItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcp_its', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('email');
            $table->string('nama_tim');
            $table->string('perguruan_tinggi');
            $table->string('judul_proposal');
            $table->string('nama_ketua');
            $table->string('nama_anggota1');
            $table->string('nama_anggota2');
            $table->string('ktm');
            $table->string('proposal');
            $table->string('biodata');
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
        Schema::dropIfExists('tcp_its');
    }
}
