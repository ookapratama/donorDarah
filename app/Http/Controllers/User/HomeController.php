<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        
        $data = array(
            'title'         => 'Home',
            'content'       => 'user/dashboard/index'
        );
        
        return view('user.layouts.app', $data);

    }
}
