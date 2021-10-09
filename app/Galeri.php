<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'nama', 'nama_singkatan', 'slug', 'created_at', 'deskripsi',
    ];
    public $timestamps = false;
}
