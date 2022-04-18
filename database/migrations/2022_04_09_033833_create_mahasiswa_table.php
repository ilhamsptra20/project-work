<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->char('nim', 12)->primary();
            $table->string('name', 35);
            $table->string('nama', 45);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->boolean('status_martial')->default(false);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->string('agama', 9);
            $table->tinyText('alamat_tempat_tinggal');
            $table->char('no_hp', 12)->unique();
            $table->string('email', 35)->unique();
            $table->char('no_telp', 10);
            $table->enum('asal_sekolah', ['SMA', 'SMK']);
            $table->string('jurusan', 5);
            $table->string('nama_sekolah', 35);
            $table->year('tahun_lulus');
            $table->string('no_ijazah', 13);
            $table->tinyText('alamat_sekolah');
            $table->string('nama_orangtua', 35);
            $table->char('no_hp_orangtua', 12)->unique()->nullable();
            $table->string('email_orangtua', 35)->unique()->nullable();
            $table->string('pekerjaan_prangtua', 15);
            $table->string('nama-instansi_orangtua', 25)->nullable();
            $table->string('pendidikan_orangtua', 4)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('mahasiswa');
    }
}
