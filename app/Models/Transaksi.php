<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
      'nama',
      'id_golongan',
      'golongan',
      'alamat',
      'jkl',
      'tgl_lahir',
      'tgl_keluar',
      'status'
    ];

    public function golongan() {
      return $this->hasOne('App\Models\Golongan', 'id', 'id_golongan');

    }

}
