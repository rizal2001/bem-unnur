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
        Schema::create('t_kementerian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('fakultas_id');
            $table->string('nama')->nullable();
            $table->text('link_medsos')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('t_jabatan');
            $table->foreign('fakultas_id')->references('id')->on('m_fakultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kementerians');
    }
};
