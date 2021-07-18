<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwibbonFieldAtLombaItsAndTcpItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lomba_its', function (Blueprint $table) {
            $table->text('twibbon')->after('lampiran_guru');
        });
        Schema::table('tcp_its', function (Blueprint $table) {
            $table->text('twibbon')->before('biodata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lomba_its', function (Blueprint $table) {
            $table->dropColumn('twibbon');
        });
        Schema::table('tcp_its', function (Blueprint $table) {
            $table->dropColumn('twibbon');
        });
    }
}
