<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->char('nim', 12);
            $table->char('kode_matkul', 6);
            $table->char('kode_tugas', 6)->nullable();
            $table->string('tugas', 40)->nullable();
            $table->char('nilai', 3);
            $table->timestamps();
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->foreign('kode_matkul')->references('kode')->on('matkul');
            $table->foreign('kode_tugas')->references('kode')->on('tugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
