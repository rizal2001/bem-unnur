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
        Schema::create('t_ormawa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_ormawa_id');
            $table->string('nama')->nullable();
            $table->string('gambar_logo')->nullable();
            $table->timestamps();

            $table->foreign('kategori_ormawa_id')->references('id')->on('m_kategori_ormawa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ormawas');
    }
};
