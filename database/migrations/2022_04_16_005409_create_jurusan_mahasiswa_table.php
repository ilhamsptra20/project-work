<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan_mahasiswa', function (Blueprint $table) {
            $table->char('kode_jurusan', 6);
            $table->char('nim', 12);
            $table->foreign('kode_jurusan')->references('kode')->on('jurusan');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->primary(['kode_jurusan', 'nim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan_mahasiswa');
    }
}
