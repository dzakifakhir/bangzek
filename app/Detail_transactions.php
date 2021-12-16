<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_transactions extends Model
{
    protected $fillable = [
        'id_transaksi', 'id_produk', 'id_user', 'nama_produk', 'tujuan', 'jumlah', 'subtotal',
    ];
}
