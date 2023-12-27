<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function masuk()
    {
        session(['previous_url' => url()->previous()]);

        if (Auth()->check()) {
            return redirect('/');
        } else {
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
                $tourismCard = $request->input('tourism_card', 0);
                if ($tourismCard == 1) {
                    return redirect('/layanan-produk/tourism-card');
                } else {
                    $request->session()->regenerate();
                    $previousUrl = session('previous_url', '/');
                    $request->session()->forget('previous_url');
                    return redirect()->to($previousUrl);
                }
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

    public function registrasi()
    {
        session(['previous_url' => url()->previous()]);

        if (Auth()->check()) {
            return redirect('/');
        } else {
            return view('user.registration', []);
        }
    }

    public function proses_registrasi(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $username = $request->username;
        $phone = $request->phone;
        $address = $request->address;
        $password = $request->password;

        $validatedData = $request->validate(
            [
                'email' => ['required', 'unique:users'],
                'username' => ['required', 'unique:users'],
                'phone' => ['required', 'unique:users'],
                'password' => 'required|min:5',
                'password_confirmation' => 'required|same:password'
            ],
            [
                'email.unique' => 'Email ' . $email . ' sudah terdaftar !',
                'username.unique' => 'Username ' . $username . ' sudah terdaftar !',
                'phone.unique' => 'No. Handphone ' . $phone . ' sudah terdaftar !',
                'password.min' => 'Panjang password minimal 5 karakter !',
                'password_confirmation.same' => 'Konfirmasi password yang anda masukan salah !',
            ]
        );

        User::insert([
            'name' => $name,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'picture' => null,
            'address' => $address,
            'password' => Hash::make($password),
            'active' => 1,
        ]);

        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            session([
                'user_id' => auth()->user()->id,
            ]);
            $request->session()->regenerate();
            $previousUrl = session('previous_url', '/');
            $request->session()->forget('previous_url');
            return redirect()->to($previousUrl);
        }
    }

    public function keluar()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
