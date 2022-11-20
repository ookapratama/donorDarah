<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
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
        $gol = Golongan::get();
        $data = array(
            'title'     => $this->title,
            'golongan'  => $gol,
            'tgl_donor' => $date,
            'content'   => 'admin/transaksi/tambah'
        );

        return view('layouts.app', $data);
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi');
    }

    public function show($id)
    {

        $dt = Transaksi::find($id);    
        $jkl = Transaksi::get();
        $gol = Golongan::get();
        $date = Carbon::now()->format('Y-m-d');

        $data = array(
            'title'     => $this->title,
            'content'   => 'admin/transaksi/edit',
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
        $update = Transaksi::find($request->id)->update($request->all());
        // $update->update($request->all());
        return redirect()->route('transaksi');
    }

    public function destroy($id) {
        
        $delete = Transaksi::find($id);
        $delete->delete();
        
        return redirect()->route('transaksi');
    }
}
