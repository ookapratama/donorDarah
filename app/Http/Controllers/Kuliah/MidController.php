<?php

namespace App\Http\Controllers\Kuliah;

use App\Http\Controllers\Controller;
use App\Models\Mid;
use Illuminate\Http\Request;

class MidController extends Controller
{
    // MID test
    protected $title = 'Data MID';
    public function index(){
    
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        // $dt = DB::table('users')->where('role', 'Petugas')->get();
        $dt = Mid::get();
        // dd($dt);
        $i = 1;
        $data = array(
            'title'     => $this->title,
            'content'   => 'midtest/index',
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
            'content'   => 'midtest/tambah'
        );


        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {
       

        $create = $request->all();
        // $create['profile'] = $namaGambar;
        Mid::create($create);

        return redirect()->route('mid');
    }

    public function show($id)
    {
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        // $dt = DB::table('users')->where('id', $id)->first();
        $dt = Mid::find($id);

        $data = array(
            'title'     => $this->title,
            'content'   => 'midtest/edit',
            'dt'        => $dt
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {
        
        // $user = User::findOrFail($id);
        // dd($request);
        $data = $request->all();
        $find = Mid::find($request->id);
       

        $find->update($data);
        return redirect()->route('mid');
    }

    public function destroy($id) {
        // dd($id);
        $detele = Mid::find($id);
        $detele->delete();

        return redirect()->route('mid');
	}
}
