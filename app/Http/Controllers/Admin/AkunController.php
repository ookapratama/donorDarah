<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AkunController extends Controller
{
    protected $title = 'Data Admin';
    public function index()
    {

        $dt = DB::table('users')->where('role', 'Admin')->get();
        $i = 1;
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/akun/index',
            'data'      => $dt,
            'no'        => $i
        );

        return view('layouts.app', $data);
    }

    public function data()
    {

        $data = array(
            'title'     => $this->title,
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
            'title'     => $this->title,
            'content'   => 'admin/akun/edit',
            'dt'        => $dt
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {

        $old = $request->all();
        $find = User::find($request->id);

        if ($request->hasFile('profile')) {

            $namaGambar = time() . '.' . $request->profile->extension();

            $request->profile->move(public_path('image'), $namaGambar);
            $old['profile'] = $namaGambar; 

        } else {

            $old['profile'] = $find->profile; 

        }
        $find->update($old);

        return redirect()->route('akun');
    }

    public function destroy($id) {
        // dd($id);
        DB::table('users')->where('id', $id)->delete();
        
        return redirect()->route('akun');
    }
}
