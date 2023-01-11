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
    public function index(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        $dari = $request->tgl_awal;
        $sampai = $request->tgl_akhir;
        
        if(isset($request->tgl_awal) || isset($request->tgl_akhir) ) {
            $dt = Transaksi::whereBetween('tgl_keluar', [$dari, $sampai])->get();
            // dd($tes);
        }
        else {
            $dt = Transaksi::get();
        }

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

        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

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
        $request->validate([
            'nama'          => 'required|max:50|min:3',
            'id_golongan'   => 'required',
            'tgl_lahir'     => 'required',
            'jkl'           => 'required',
            'alamat'        => 'required'
        ]);

        $find = $request->id_golongan;
        $gol  = Golongan::find($find);
        $sum = Stok::where('id_golongan', $find)->sum('jumlah');
        $n = $gol->stok - 1;

        $trans = $gol->stok - $n;
        $stok = $gol->stok - $trans;
        
        $gol->stok = $stok;
        $gol->save();
        
        // $gol->decrement('stok');


        Transaksi::create($request->all());
        return redirect()->route('transaksi');
    }

    public function show($id)
    {   
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        $dt = Transaksi::find($id);    
        $jkl = Transaksi::get();
        $gol = Golongan::where('stok', '>', 0)->get();
        $date = Carbon::now()->format('Y-m-d');
        // dd($gol->id);
        
        $gol1 = Golongan::find($id);
        // dump($dt->id_golongan);
        // dump($gol1->id);
        // dd($id);
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

        $request->validate([
            'nama'          => 'required|max:50|min:3',
            'id_golongan'   => 'required',
            'tgl_lahir'     => 'required',
            'jkl'           => 'required',
            'alamat'        => 'required'
        ]);

        $find = $request->id_golongan;
        $gol  = Golongan::find($find);

        $old_gol = Transaksi::find($find);
        

        return redirect()->route('transaksi');
    }

    public function destroy($id) {
        
        $delete = Transaksi::find($id);
        $delete->delete();
        
        return redirect()->route('transaksi');
    }

    public function cari (Request $request) {

        $dari = $request->tgl_awal;
        $sampai = $request->tgl_akhir;

        $tes = Transaksi::whereBetween('tgl_keluar', [$dari, $sampai])->get();

        // dd($tes);
        // $data = array (

        // );


        return redirect()->route('transaksi', ['data' => $tes]);

    }

}
