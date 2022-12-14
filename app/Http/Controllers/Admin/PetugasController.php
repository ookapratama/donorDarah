<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PetugasController extends Controller
{
    protected $title = 'Data Petugas';
    public function index()
    {
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        // $dt = DB::table('users')->where('role', 'Petugas')->get();
        $dt = User::where('role', 'Petugas')->get();
        // dd($dt);
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

        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/petugas/tambah'
        );


        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|max:100|min:3',
            'username'  => 'required|max:100|min:5',
            'password'  => 'required|max:12|min:5',
            'profile'   => 'required|mimes:jpg,png,jpeg|max:1024|image',
            'alamat'    => 'required',
            'tgl_lahir' => 'required'
        ]);
        

        $namaGambar = time() . '.' . $request->profile->extension();

        $request->profile->move(public_path('image'), $namaGambar);
        // dd($request);

        $create = $request->all();
        $create['profile'] = $namaGambar;
        User::create($create);

        return redirect()->route('petugas');
    }

    public function show($id)
    {
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        // $dt = DB::table('users')->where('id', $id)->first();
        $dt = User::find($id);

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/petugas/edit',
            'dt'        => $dt
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'      => 'required|max:100|min:3',
            'username'  => 'required|max:100|min:5',
            // 'password'  => 'required|max:12|min:5',
            'profile'   => 'mimes:jpg,png,jpeg|max:1024|image',
            'alamat'    => 'required',
            'tgl_lahir' => 'required'
        ]);

        // $user = User::findOrFail($id);
        // dd($request);
        $data = $request->all();
        $find = User::find($request->id);
        if ($request->hasFile('profile')) {
                
            $namaGambar = time() . '.' . $request->profile->extension();
            $request->profile->move(public_path('image'), $namaGambar);
            $data['profile'] = $namaGambar;

        } else {

            $data['profile'] = $find->profile;

        }

        $find->update($data);
        return redirect()->route('petugas');
    }

    public function destroy($id) {
        // dd($id);
        $detele = User::find($id);
        $detele->delete();

        return redirect()->route('petugas');
    }
}
