<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAffiliateController extends Controller
{
    public function masuk()
    {
        return view('affiliate.login');
    }

    public function proses_masuk(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::guard('affiliators')->attempt(['username' => $username, 'password' => $password])) {
            if (Auth::guard('affiliators')->user()->active == 1) {
                session([
                    'affiliators_id' => Auth::guard('affiliators')->user()->id,
                ]);
                $request->session()->regenerate();
                return redirect()->to("/app-affiliate/dashboard");
            } else {
                session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Akun anda tidak aktif !");
                session()->flash('msg_status', 'danger');
                return back();
            }
        } else {
            session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Periksa kembali data login anda!");
            session()->flash('msg_status', 'danger');
            return back();
        }
    }

    public function keluar()
    {
        Auth::guard('affiliators')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/app-affiliate');
    }}
