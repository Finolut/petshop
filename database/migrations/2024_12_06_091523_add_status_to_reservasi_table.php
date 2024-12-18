<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToReservasiTable extends Migration
{
    public function up()
    {
        Schema::table('reservasi', function (Blueprint $table) {
            $table->string('status')->default('belum bayar');
        });
    }

    public function down()
    {
        Schema::table('reservasi', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
