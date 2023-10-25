<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function masuk()
    {
        return view('admin.login', []);
    }

    public function proses_masuk(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
            if (Auth::guard('admin')->user()->active == 1) {
                session([
                    'admin_id' => Auth::guard('admin')->user()->id,
                ]);
                $request->session()->regenerate();
                return redirect()->to("/app-admin/dashboard");
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
        Auth::guard('admin')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/app-admin');
    }
}
