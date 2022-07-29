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
        Schema::create('t_background', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('halaman_id');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('halaman_id')->references('id')->on('m_halaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backgrounds');
    }
};
