<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'golongan',
        'jkl',
        'alamat',
        'tgl_lahir',
        'tgl_donor'
    ];


    public function golongan() {
        return $this->hasMany('App\Golongan');
    }
}
