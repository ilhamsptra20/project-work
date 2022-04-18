<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nim', 12);
            $table->char('kode_matkul', 6);
            $table->char('semester', 2);
            $table->timestamps();
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->foreign('kode_matkul')->references('kode')->on('matkul');
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
}
