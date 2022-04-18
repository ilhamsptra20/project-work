<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';


    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    #relasi many to many -> kelomopok
    public function kelompok()
    {
        return $this->belongsToMany(Kelompok::class, 'kelompok_mahasiswa', 'nim', 'kode_kelompok');
    }

    #relasi many to many -> jurusan
    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'jurusan_mahasiswa', 'nim', 'kode_jurusan');
    }

    #relasi one to many
    public function krs()
    {
        return $this->hasMany(krs::class, 'nim');
    }

    public function pengumpulan()
    {
        return $this->hasMany(Pengumpulan::class, 'nim');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'nim');
    }
}
