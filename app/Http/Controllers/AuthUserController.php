<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function masuk()
    {
        if(Auth()->check()){
            return redirect('/');
        }else{
            return view('user.login', []);
        }
    }

    public function proses_masuk(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            if (auth()->user()->active == 1) {
                session([
                    'user_id' => auth()->user()->id,
                ]);
                $request->session()->regenerate();
                return redirect()->to("/");
            } else {
                session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Akun anda tidak aktif !");
                session()->flash('msg_status', 'danger');
                return back();
            }
        } else {
            session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Periksa kembali data login anda !");
            session()->flash('msg_status', 'danger');
            return back();
        }
    }

    public function keluar()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/masuk');
    }
}
