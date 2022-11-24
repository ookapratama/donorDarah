<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use App\Models\Stok;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    protected $title = 'Data Transaksi';
    public function index()
    {

        $dt = Transaksi::get();
        $i = 1;

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/transaksi/index',
            'data'      => $dt,
            'no'        => $i
        );

        return view('layouts.app', $data);
    }

    public function data()
    {
        $date = Carbon::now()->format('Y-m-d');
        $gol = Golongan::where('stok', '>', 0)->get();
        
        // dd($gol);
        $data = array(
            'title'     => $this->title,
            'golongan'  => $gol,
            'tgl_keluar' => $date,
            'content'   => 'admin/transaksi/tambah'
        );

        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {   
        // dd($request);
        $id_gol = $request->id_golongan;
        $gol = Golongan::find($id_gol);


        $gol->decrement('stok');

        Transaksi::create($request->all());
        return redirect()->route('transaksi');
    }

    public function show($id)
    {

        $dt = Transaksi::find($id);    
        $jkl = Transaksi::get();
        $gol = Golongan::get();
        $date = Carbon::now()->format('Y-m-d');
        // dd($gol->id);
        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/transaksi/edit',
            'dt'        => $dt,
            'jkl'       => $jkl,
            'tgl_keluar' => $date,
            'golongan'  => $gol
        );
        // dd($data['golongan']);

        return view('layouts.app', $data);
    }

    public function update(Request $request)
    {
        $find = $request->id;
        $gol  = Golongan::find($find);
        
        $old_id = $request->id_golongan;
        $old_gol = Golongan::find($old_id);
        
        $old_gol->increment('stok');
        $gol->decrement('stok');
        dd($gol['stok']);


        // select data dari golongan dlu
        // jika berubah golongan nya, increment stok lama
        // decrement ke stok yang baru  

        // dd($find);
        Transaksi::find($find)->update($request->all());
        // $update->update($request->all());
        return redirect()->route('transaksi');
    }

    public function destroy($id) {
        
        $delete = Transaksi::find($id);
        $delete->delete();
        
        return redirect()->route('transaksi');
    }
}
