<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GolonganController extends Controller
{
    public function index() {
        $i = 1;
        $gol = Golongan::get();
        $stok = Stok::get()->count();
        // dd($stok);
        $data = array(
            'title'         => 'Data Golongan',
            'content'       => 'admin/golongan/index',
            'data'          => $gol,
            'no'            => $i
        );

        return view('layouts.app', $data);

    }
}
