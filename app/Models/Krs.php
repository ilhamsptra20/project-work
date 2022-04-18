<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'Krs';
    protected $primaryKey = 'kode';

    protected $fillable = [

    ];

    use HasFactory;

   
}
