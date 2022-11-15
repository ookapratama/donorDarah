<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index() {

        $data = array (
            'title'     => 'Data Admin',
            'content'   => 'admin/akun/index'
        );

        return view('layouts.app', $data);
    }

    public function data() {

        $data = array (
            'title'     => 'Data Akun',
            'content'   => 'admin/akun/tambah'
        );
        

        return view('layouts.app', $data);
    }
}
