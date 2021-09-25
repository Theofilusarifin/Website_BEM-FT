<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    protected $fillable = [
        'nama', 'link_youtube', 'deskripsi',
    ];
}
