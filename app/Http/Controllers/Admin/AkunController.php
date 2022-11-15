<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(Request $request) {
        $request->validate([
            'nama'      => 'required',
            'username'  => 'required',
            'password'  => 'min:6|max:16|required',
            'profil'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $namaGambar = time().'.'.$request->profil->extension();

        $move = $request->profil->move(public_path('image'), $namaGambar);
        // dd($namaGambar);

        $tes = DB::table('users')->insert([
            'profile'       => $namaGambar,
            'nama'          => $request->nama,
            'username'      => $request->username,
            'password'      => $request->password,
            'role'          => $request->role,
        ]);

        // dd($tes);

        return redirect()->route('akun');
    }
}
