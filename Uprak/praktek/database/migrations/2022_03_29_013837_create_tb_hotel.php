<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hotel');
            $table->string('lokasi');
            $table->double('harga');
            $table->string('image');
            $table->string('fasilitas');
            $table->string('sinopsis');
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
        Schema::dropIfExists('tb_hotel');
    }
};
