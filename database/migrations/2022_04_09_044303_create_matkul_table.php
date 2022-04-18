<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul', function (Blueprint $table) {
            $table->char('kode', 6)->primary();
            $table->char('nip', 12);
            $table->string('nama', 25);
            $table->string('slug', 30)->unique();
            $table->tinyInteger('jumlah_sks');
            $table->timestamps();
            $table->foreign('nip')->references('nip')->on('dosen')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul');
    }
}
