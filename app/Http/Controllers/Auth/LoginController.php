<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    protected $title_login = "Login";
    protected $title_register = "Register";
    protected $title_password = "Ubah Password";


    public function login()
    {
        $title = $this->title_login;
        $data = array(
            'title'     => $title,
            'content'   => 'auth/login'
        );

        return view('auth.layouts.index', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username'      => 'required',
            'password'      => 'required'
        ]);

        // dd(Auth::attempt(['username' => $request->username, 'password' => $request->password]));
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = User::where('username', $request->username)->first();
            // dd($tes);
            $id         = $request->session()->put('id', $user->id);
            $username   = $request->session()->put('username', $user->username);
            $nama       = $request->session()->put('nama', $user->nama);
            $role       = $request->session()->put('role', $user->role);
            $aktif      = $request->session()->put('aktif', $user->aktif);
            $profile    = $request->session()->put('profile', $user->profile);

            return redirect()->route('dashboards');
        } else {
            return back()->withErrors([
                'username'      => 'Periksa kembali username atau password anda',
            ]);
        }
    }

    public function register()
    {

        $title = $this->title_register;
        $data = array(
            'title'     => $title,
            'content'   => 'auth/register'
        );

        return view('auth.layouts.index', $data);
    }

    public function register_action(Request $request)
    {

        $request->validate([
            'nama_depan'        => 'required|max:100|min:3',
            'nama_belakang'     => 'required|max:100|min:3',
            'username'          => 'required|max:100|min:5',
            'password'          => 'required|max:100|min:5',
            'password-confirm'  => 'required|max:100|min:5|same:password',
            'tgl_lahir'         => 'required',
            'profile'           => 'required|mimes:jpg,png,jpeg|max:1024|image'
        ]);

        $namaGambar = time() . '.' . $request->profile->extension();
        $request->profile->move(public_path('image'), $namaGambar);
        $data = $request->all();
        $data['profile'] = $namaGambar;

        $nama = $request->nama_depan . " " . $request->nama_belakang;
        $data['nama'] = $nama;
        $data['password'] = Hash::make($request->password);

        // $data['password'] = decrypt($data['password']);

        User::create($data);
        return redirect()->route('login');
    }

    public function forget_password()
    {
        $title = $this->title_password;
        // $user = User::find($id);
        $data = array(
            'title'     => $title,
            'content'   => 'auth/forget',
            // 'user'      => $user
        );

        return view('auth.layouts.index', $data);
    }

    public function forget_password_action(Request $request)
    {

        // $data = $request->old_password;
        // dump($data);

        $request->validate([
            'old_password'          => 'required|current_password',
            'new_password'          => 'required',
        ]);

        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();

        return redirect()->route('dashboards');
    }

    public function logout(Request $request)
    {

        Auth::logout();
        Session()->forget('id');
        Session()->forget('nama');
        Session()->forget('username');
        Session()->forget('role');
        Session()->forget('aktif');

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
