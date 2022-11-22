<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_golongan',
        'golongan',
        'jumlah',
        'tgl_masuk'
    ];


    public function golongan() {
        return $this->hasOne('App\Models\Golongan', 'id', 'id_golongan');
    }
}
