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
        Schema::create('m_kabinet', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('tahun_periode')->nullable();
            $table->text('visi')->nullable();
            $table->string('gambar_logo')->nullable();
            $table->string('gambar_struktur')->nullable();
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
        Schema::dropIfExists('kabinets');
    }
};
