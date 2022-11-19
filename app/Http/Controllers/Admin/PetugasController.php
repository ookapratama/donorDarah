<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    protected $title = 'Data Petugas';
    public function index()
    {

        // $dt = DB::table('users')->where('role', 'Petugas')->get();
        User:
        $i = 1;
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/petugas/index',
            'data'      => $dt,
            'no'        => $i
        );

        // dd($data);

        return view('layouts.app', $data);
    }

    public function data()
    {

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/petugas/tambah'
        );


        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {

        $namaGambar = time() . '.' . $request->profile->extension();

        $request->profile->move(public_path('image'), $namaGambar);
        // dd($request);
        $tes = DB::table('users')->insert([
            'profile'       => $namaGambar,
            'nama'          => $request->nama,
            'username'      => $request->username,
            'password'      => $request->password,
            'jkl'           => $request->jkl,
            'alamat'        => $request->alamat,
            'tgl_lahir'     => $request->tgl_lahir,
            'role'          => $request->role,
        ]);

        return redirect()->route('petugas');
    }

    public function show($id)
    {

        $dt = DB::table('users')->where('id', $id)->first();

        // dd($dt);
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/petugas/edit',
            'dt'        => $dt
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {

        // $user = User::findOrFail($id);
        // dd($request);
        if ($request->hasFile('profile')) {
                
            $namaGambar = time() . '.' . $request->profile->extension();

            $request->profile->move(public_path('image'), $namaGambar);

            $tes = DB::table('users')->where('id', $request->id)->update([
                'profile'       => $namaGambar,
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => $request->password,
                'jkl'           => $request->jkl,
                'alamat'        => $request->alamat,
                'tgl_lahir'     => $request->tgl_lahir,
                'role'          => $request->role,
            ]);
        } else {
            $tes = DB::table('users')->where('id', $request->id)->update([
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => $request->password,
                'jkl'           => $request->jkl,
                'alamat'        => $request->alamat,
                'tgl_lahir'     => $request->tgl_lahir,
                'role'          => $request->role,
            ]);
        }

        return redirect()->route('petugas');
    }

    public function destroy($id) {
        // dd($id);
        DB::table('users')->where('id', $id)->delete();
        
        return redirect()->route('petugas');
    }
}
