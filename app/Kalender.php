<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $fillable = [
        'bulan', 'url_image',
    ];
    public $timestamps = false;
}
