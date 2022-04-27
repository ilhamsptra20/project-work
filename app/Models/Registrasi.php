<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = "registrasi";
    protected $fillable = [
        'no',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'status_martial',
        'kewarganegaraan',
        'agama',
        'alamat_tempat_tinggal',
        'no_hp',
        'email',
        'no_telp',
        'asal_sekolah',
        'jurusan',
        'nama_sekolah',
        'tahun_lulus',
        'no_ijazah',
        'alamat_sekolah',
        'nama_orangtua',
        'no_hp_orangtua',
        'email_orangtua',
        'pekerjaan_orangtua',
        'nama_instansi_orangtua',
        'pendidikan_orangtua',
    ];

}
