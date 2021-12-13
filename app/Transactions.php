<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'transaksi', 'id_user', 'id_pengiriman','no_transaksi','status'
    ];
}
