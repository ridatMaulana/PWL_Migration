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
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->char('npm',10);
            $table->char('kode_matakuliah',8);
            $table->timestamps();

            $table->foreign('npm')->references('npm')->on('mahasiswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
};
