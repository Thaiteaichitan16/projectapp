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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->integer('PelangganID');
            $table->string('NamaPelanggan',255);
            $table->string('Alamat',255);
            $table->string('NomorTelepon',15);
            $table->timestamps();
            $table->primary('PelangganID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pelanggans');
    }
};
