<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id'); // Auto-increment primary key
            $table->string('name', 20)->unique(); // Role name
            $table->timestamps(); // Created_at and updated_at
        });

        // Insert default roles
        DB::table('roles')->insert([
            ['name' => 'customer'],
            ['name' => 'pegawai'],
            ['name' => 'admin'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
