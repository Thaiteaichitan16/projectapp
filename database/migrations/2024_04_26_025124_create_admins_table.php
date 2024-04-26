<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('AdminID');
            $table->string('Nama',255);
            $table->string('Alamat',255);
            $table->string('Username',255);
            $table->string('Password',255);
            $table->string('NomorTelepon',15);
            $table->enum('Akses',['Admin','Petugas']);
            $table->timestamps();
            $table->primary('AdminID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('admins');
    }
};
