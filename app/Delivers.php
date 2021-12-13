<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivers extends Model
{
    protected $fillable = [
        'id_pengiriman', 'kota_asal', 'kota_tujuan','biaya','nama_jasapengiriman'
    ];
}
