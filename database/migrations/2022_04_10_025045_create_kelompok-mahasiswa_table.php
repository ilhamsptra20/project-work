<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_mahasiswa', function (Blueprint $table)
        {
            $table->char('kode_kelompok', 6);
            $table->char('nim', 12);
            $table->foreign('kode_kelompok')->references('kode')->on('kelompok');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->primary(['kode_kelompok', 'nim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
