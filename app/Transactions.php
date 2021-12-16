<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'transaksi', 'id_user', 'tujuan', 'no_transaksi', 'nama_produk', 'jumlah', 'subtotal', 'status',
    ];
}
