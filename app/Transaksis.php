<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksis extends Model
{
    protected $fillable = [
        'transaksi', 'id_user', 'id_pengiriman','no_transaksi','status'
    ];
}
