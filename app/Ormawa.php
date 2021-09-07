<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'nama_instagram', 'link_instagram', 'oa_line',
    ];
}
