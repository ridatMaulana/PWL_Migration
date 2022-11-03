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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matakuliah',8);
            $table->char('nidn', 10);
            $table->char('kelas',1);
            $table->string('hari',10);
            $table->time('jam');
            $table->timestamps();

            $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nidn')->references('nidn')->on('dosen')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
