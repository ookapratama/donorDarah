<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'id_golongan',
        'golongan',
        'jkl',
        'alamat',
        'tgl_lahir',
        'tgl_donor'
    ];


    public function golongan() {
        return $this->hasOne('App\Models\Golongan', 'id', 'id_golongan');
    }
}
