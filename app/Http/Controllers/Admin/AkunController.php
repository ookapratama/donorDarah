<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AkunController extends Controller
{
    public function index()
    {

        $dt = DB::table('users')->get();
        $i = 1;
        $data = array(
            'title'     => 'Data Admin',
            'content'   => 'admin/akun/index',
            'data'      => $dt,
            'no'        => $i
        );

        return view('layouts.app', $data);
    }

    public function data()
    {

        $data = array(
            'title'     => 'Data Akun',
            'content'   => 'admin/akun/tambah'
        );


        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {

        $namaGambar = time() . '.' . $request->profile->extension();

        $request->profile->move(public_path('image'), $namaGambar);

        $tes = DB::table('users')->insert([
            'profile'       => $namaGambar,
            'nama'          => $request->nama,
            'username'      => $request->username,
            'password'      => $request->password,
            'role'          => $request->role,
        ]);

        return redirect()->route('akun');
    }

    public function show($id)
    {

        $dt = DB::table('users')->where('id', $id)->first();

        // dd($dt);
        $data = array(
            'title'     => 'Data Akun',
            'content'   => 'admin/akun/edit',
            'dt'        => $dt
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {

        // $user = User::findOrFail($id);
        // dd($user);
        if ($request->hasFile('profile')) {


            $namaGambar = time() . '.' . $request->profile->extension();

            $request->profile->move(public_path('image'), $namaGambar);

            $tes = DB::table('users')->where('id', $request->id)->update([
                'profile'       => $namaGambar,
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => $request->password,
                'role'          => $request->role,
            ]);
        } else {
            $tes = DB::table('users')->where('id', $request->id)->update([
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => $request->password,
                'role'          => $request->role,
            ]);
        }


        return redirect()->route('akun');
    }

    public function delete($id) {

        DB::table('users')->where('id', $id)->delete();
        
        return redirect()->route('akun');
    }
}
