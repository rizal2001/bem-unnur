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
        Schema::create('t_jabatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_kementerian_id');
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();
            $table->timestamps();

            $table->foreign('kategori_kementerian_id')->references('id')->on('m_kategori_kementerian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
};
