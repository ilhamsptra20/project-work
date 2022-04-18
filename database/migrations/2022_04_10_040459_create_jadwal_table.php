<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->char('kode_matkul', 6);
            $table->char('kode_kelompok', 6);
            $table->char('no-ruangan', 3);
            $table->char('nip', 12);
            $table->char('waktu', 13);
            $table->foreign('kode_matkul')->references('kode')->on('matkul');
            $table->foreign('kode_kelompok')->references('kode')->on('kelompok');
            $table->foreign('no-ruangan')->references('no')->on('ruangan');
            $table->foreign('nip')->references('nip')->on('dosen');
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
        Schema::dropIfExists('jadwal');
    }
}
