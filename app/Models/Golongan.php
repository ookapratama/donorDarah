<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'gol'
    ];

    public function stok() {
        return $this->belongsTo('App\Stok');
    }
}
