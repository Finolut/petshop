<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id'); // Auto-increment primary key
            $table->string('name', 35); // Nama user
            $table->string('email', 50)->unique(); // Email user
            $table->string('password'); // Password user
            $table->string('role', 20); // Role (customer, pegawai, admin)
            $table->timestamps(); // Created_at and updated_at
        });

        // Insert default users
        DB::table('users')->insert([
            ['name' => 'Customer User', 'email' => 'customer@example.com', 'password' => bcrypt('password'), 'role' => 'customer'],
            ['name' => 'Pegawai User', 'email' => 'pegawai@example.com', 'password' => bcrypt('password'), 'role' => 'pegawai'],
            ['name' => 'Admin User', 'email' => 'admin@example.com', 'password' => bcrypt('password'), 'role' => 'admin'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
