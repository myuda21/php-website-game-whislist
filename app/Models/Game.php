<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Isi yang boleh di‐mass assign
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
    ];
}
