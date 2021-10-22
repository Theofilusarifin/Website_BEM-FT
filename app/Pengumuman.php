<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumumans';
    protected $fillable = [
        'judul', 'slug', 'created_at', 'isi', 'link_foto',
    ];
    public $timestamps = false;
}
