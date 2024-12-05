<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTable extends Migration
{
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id('id'); // Primary key
            $table->string('nama', 50); // Nama hewan (string)
            $table->enum('jenis', ['kucing', 'anjing']); // Jenis hewan
            $table->enum('gender', ['jantan', 'betina']); // Gender hewan
            $table->unsignedInteger('jenis_ras'); // Jenis ras (integer)
            $table->enum('ukuran', ['kecil', 'sedang', 'besar']); // Ukuran
            $table->unsignedInteger('warna'); // Warna (integer)
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
