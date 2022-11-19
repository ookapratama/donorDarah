<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    protected $title = 'Data Stok Darah';
    public function index()
    {

        $dt = DB::table('stoks')->get();
        $i = 1;
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/stok/index',
            'data'      => $dt,
            'no'        => $i
        );

        // dd($data);

        return view('layouts.app', $data);
    }

    public function data()
    {
        $gol = DB::table('golongans')->get();
        $date = Carbon::now()->format('Y-m-d');
        $data = array(
            'title'     => $this->title,
            'golongan'  => $gol,
            'tgl_donor' => $date,
            'content'   => 'admin/stok/tambah'
        );
        // dd($gol);

        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {


        // dd($request);
        $tes = DB::table('stoks')->insert([
            'nama'              => $request->nama,
            'id_golongan'       => $request->id_golongan,
            'alamat'            => $request->alamat,
            'jkl'               => $request->jkl,
            'alamat'            => $request->alamat,
            'tgl_lahir'         => $request->tgl_lahir,
            'tgl_donor'         => $request->tgl_donor,
        ]);

        return redirect()->route('stok');
    }

    public function show($id)
    {

        $dt = DB::table('stoks')->where('id', $id)->first();

        // dd($dt);
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/stok/edit',
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

            $tes = DB::table('stoks')->where('id', $request->id)->update([
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
            $tes = DB::table('stoks')->where('id', $request->id)->update([
                'nama'          => $request->nama,
                'username'      => $request->username,
                'password'      => $request->password,
                'jkl'           => $request->jkl,
                'alamat'        => $request->alamat,
                'tgl_lahir'     => $request->tgl_lahir,
                'role'          => $request->role,
            ]);
        }

        return redirect()->route('stok');
    }

    public function destroy($id) {
        // dd($id);
        DB::table('stoks')->where('id', $id)->delete();
        
        return redirect()->route('stok');
    }
}