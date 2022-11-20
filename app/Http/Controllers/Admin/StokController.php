<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use App\Models\Stok;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    protected $title = 'Data Stok Darah';
    public function index()
    {

        $dt = Stok::get();
        
        $i = 1;
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/stok/index',
            'data'      => $dt,
            'no'        => $i
        );

        return view('layouts.app', $data);
    }

    public function data()
    {
        $date = Carbon::now()->format('Y-m-d');
        $gol = Golongan::get();
        $data = array(
            'title'     => $this->title,
            'golongan'  => $gol,
            'tgl_donor' => $date,
            'content'   => 'admin/stok/tambah'
        );

        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {
        // $sum = 0;
        Stok::create($request->all());
        
        $count_stok = $request->id_golongan;
        $sum = Golongan::find($count_stok);
        $sum->increment('stok');
        // dd($sum);
        
        return redirect()->route('stok');
    }

    public function show($id)
    {

        $dt = Stok::find($id);    
        $jkl = Stok::get();
        $gol = Golongan::get();
        $date = Carbon::now()->format('Y-m-d');

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/stok/edit',
            'dt'        => $dt,
            'jkl'       => $jkl,
            'tgl_donor' => $date,
            'golongan'  => $gol
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {
        // dd($request->id);
        $count_stok = $request->id_golongan;
        $sum = Golongan::find($count_stok);
        
        $old = Stok::find($request->id);
        // dd($old);
        if ($request->id_golongan != $old->id_golongan) {
            $sum->increment('stok');
            // dd($sum);
        }
        Stok::find($request->id)->update($request->all());


        // $update->update($request->all());
        return redirect()->route('stok');
    }

    public function destroy($id) {
        


        $delete = Stok::find($id);
        $find_gol = $delete->id_golongan;
        $gol = Golongan::find($find_gol);
        $gol->decrement('stok');
        // dd($gol);
        
        $delete->delete();
        
        return redirect()->route('stok');
    }
}