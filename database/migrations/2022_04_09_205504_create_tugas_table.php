<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->char('kode', 6)->primary();
            $table->char('kode_matkul', 6);
            $table->char('nip', 12);
            $table->string('judul', 30);
            $table->string('slug', 40);
            $table->text('deskripsi');
            $table->dateTime('deadline');
            $table->foreign('kode_matkul')->references('kode')->on('matkul')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tugas');
    }
}
