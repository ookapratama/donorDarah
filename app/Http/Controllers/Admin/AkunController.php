<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AkunController extends Controller
{
    protected $title = 'Data Admin';
    public function index()
    {

        // $dt = DB::table('users')->where('role', 'Admin')->get();
        $dt = User::where('role', 'Admin')->get();
        // dd($dt);
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

        $request->validate([
            'nama'      => 'required|max:10|min:3',
            'username'  => 'required|max:20|min:5',
            'password'  => 'required|max:12|min:5',
            'profile'   => 'required|mimes:jpg,png,jpeg|max:1024|image'
        ]);


        $namaGambar = time() . '.' . $request->profile->extension();

        $request->profile->move(public_path('image'), $namaGambar);

        $data = $request->all();
        $data['profile'] = $namaGambar;
        // dd($data);
        User::create($data);
        
        // Validator::make()
        
        // if (->fails()) {
        //     return back()->withInput()->withErrors($validate->messages());
        // }

        return redirect()->route('akun');
    }

    public function show($id)
    {

        $dt = User::find($id);

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
        $request->validate([
            'nama'      => 'required|max:10|min:3',
            'username'  => 'required|max:20|min:5',
            'password'  => 'required|max:12|min:5',
            'profile'   => 'required|mimes:jpg,png,jpeg|max:1024|image'
        ]);

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
        $find = User::find($id);
        $find->delete();
        
        return redirect()->route('akun');
    }
}
