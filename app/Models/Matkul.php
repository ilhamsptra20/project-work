<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'kode';

    protected $fillable = [

    ];

    use HasFactory;

    // RELATIONSHIPS
    /**
     * one to many
     */
    public function kelompok()
    {
        return $this->hasMany(Kelompok::class, 'kode_matkul');
    }

    public function Krs()
    {
        return $this->hasMany(Krs::class, 'kode_matkul');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'kode_matkul');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'kode_matkul');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'kode_matkul');
    }

    // belongsTo
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nip');
    }
}
