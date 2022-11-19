<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    public function index() {
        $i = 1;
        $gol = DB::table('golongans')->get();
        $data = array(
            'title'         => 'Data Golongan',
            'content'       => 'admin/golongan/index',
            'data'          => $gol,
            'no'            => $i
        );

        return view('layouts.app', $data);

    }
}
