<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_transaksis extends Model
{
    protected $fillable = [
        'id_transaksi', 'id_produk', 'jumlah','subtotal','id_user'
    ];
}
