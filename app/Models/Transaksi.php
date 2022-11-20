<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
      'nama',
      'stok_id',
      'golongan',
      'tgl_transaksi',
      'tgl_keluar',
      'status'
    ];
}
