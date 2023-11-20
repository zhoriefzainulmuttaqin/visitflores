<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthPartnerController extends Controller
{
    public function masuk()
    {
        return view('partner.login');
    }

    public function proses_masuk(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::guard('partner')->attempt(['username' => $username, 'password' => $password])) {
            if (Auth::guard('partner')->user()->active == 1) {
                session([
                    'partner_id' => Auth::guard('partner')->user()->id,
                ]);
                $request->session()->regenerate();
                return redirect()->to("/app-mitra/dashboard");
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
        Auth::guard('partner')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/app-mitra');
    }
}
