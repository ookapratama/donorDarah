<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        
        $golongan = Golongan::get();

        $data = array(
            'title'         => 'Home',
            'content'       => 'user/dashboard/index',
            'golongan'      => $golongan
        );
        
        return view('user.layouts.app', $data);

    }
}
