<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'nama', 'nama_singkatan', 'slug', 'tanggal', 'deskripsi',
    ];
    public $timestamps = false;
}
