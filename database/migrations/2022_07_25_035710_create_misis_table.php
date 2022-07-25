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
        Schema::create('t_misi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kabinet_id');
            $table->string('nama')->nullable();
            $table->timestamps();

            $table->foreign('kabinet_id')->references('id')->on('m_kabinet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misis');
    }
};
