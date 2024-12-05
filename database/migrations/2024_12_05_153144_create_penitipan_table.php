<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenitipanTable extends Migration
{
    public function up()
    {
        Schema::create('penitipan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->enum('jenis', ['anjing', 'kucing']);
            $table->enum('gender', ['jantan', 'betina']);
            $table->string('ras');
            $table->enum('ukuran', ['kecil', 'sedang', 'besar']);
            $table->string('warna');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penitipan');
    }
}
