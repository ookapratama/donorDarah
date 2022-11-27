<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use App\Models\Stok;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        if (Session()->get('username') == "") {
            return redirect()->route('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        $petugas    = User::where('role', 'Petugas')->count();
        $stok       = Stok::count();
        $transaksi  = Transaksi::count();

        $gol_a = Golongan::where('golongan', 'A')->sum('stok');
        $gol_b = Golongan::where('golongan', 'B')->sum('stok');
        $gol_ab = Golongan::where('golongan', 'AB')->sum('stok');
        $gol_o = Golongan::where('golongan', 'O')->sum('stok');

        $data = array(
            'title'     => 'Dashboard',
            'content'   => 'admin/dashboard',
            'petugas'   => $petugas,
            'stok'      => $stok,
            'transaksi' => $transaksi,
            'gol_a' => $gol_a,
            'gol_b' => $gol_b,
            'gol_ab' => $gol_ab,
            'gol_o' => $gol_o,
        );
        // dd($data);

        return view('layouts.app', $data);
    }
}
