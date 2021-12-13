<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kotas extends Model
{
    protected $fillable = [
        'id_kota', 'nama_kota'
    ];
}
