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
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $gol = Golongan::get();
        $data = array(
            'title'     => $this->title,
            'golongan'  => $gol,
            'tgl_masuk' => $date,
            'content'   => 'admin/stok/tambah'
        );

        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {
        // $sum = 0;
        Stok::create($request->all());
        
        $count_stok = $request->id_golongan;
        $stok = Golongan::find($count_stok);
        if ($stok['stok'] > 0) {
            $stok['stok'] += $request->jumlah;            
        }
        else {
            $stok['stok'] = $request->jumlah;
        }
        $stok->update();
        // dd($stok['stok']);
        
        return redirect()->route('stok');
    }

    public function show($id)
    {

        $dt = Stok::find($id);    
        $stok = Stok::get();
        $stok_gol = Golongan::find($id);
        $gol = Golongan::get();
        $date = Carbon::now()->format('Y-m-d');

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/stok/edit',
            'dt'        => $dt,
            'stok'      => $stok,
            'stok_gol'  => $stok_gol,
            'tgl_masuk' => $date,
            'golongan'  => $gol
        );

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id_golongan;
        $sum = Golongan::find($id);
        
        $old_stok = Stok::find($request->id);
        
        $count_stok = $request->id_golongan;
        $stok = Golongan::find($count_stok);

        // dd($stok['stok'] - ($old_stok->jumlah - $request->jumlah));

        if ($request->jumlah > $old_stok->jumlah) {
            $stok['stok'] = ($request->jumlah - $old_stok->jumlah) + $stok['stok'];
            // dd($stok['stok']);            
        }
        else {
            // $old_stok->jumlah = $request->jumlah;
            $stok['stok'] = $stok['stok'] - ($old_stok->jumlah - $request->jumlah);
            // dd($stok['stok'] - ($old_stok->jumlah - $request->jumlah));
        }

        $stok->update($request->all());
        $old_stok->update($request->all());


        // $update->update($request->all());
        return redirect()->route('stok');
    }

    public function destroy($id) {
        


        $delete = Stok::find($id);
        $find_gol = $delete->id_golongan;
        $gol = Golongan::find($find_gol);
        $gol['jumlah'] = $gol->jumlah - ($gol->jumlah - $delete->jumlah);
        // dd($gol['jumlah']);
        $gol->update();
        $delete->delete();
        
        return redirect()->route('stok');
    }
}