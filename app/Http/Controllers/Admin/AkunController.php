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

        return view('admin.app', $data);
    }

    public function data() {
        return "data tabel";
    }
}
