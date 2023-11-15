<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function akun_admin()
    {
        $admins = Admin::where('id', '!=', Auth::guard('admin')->user()->id)->orderBy('name', 'asc')->get();

        $data = [
            'admins' => $admins,
        ];
        return view('admin.akun_admin', $data);
    }

    public function tambah_akun_admin()
    {
        return view('admin.tambah_akun_admin');
    }

    public function proses_tambah_akun_admin(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $username = $request->username;
        $password = $request->password;

        $validatedData = $request->validate(
            [
                'email' => ['required', 'unique:administrators'],
                'username' => ['required', 'unique:administrators'],
                'phone' => ['required', 'unique:administrators'],
                'password' => 'required|min:5',
                'password_confirmation' => 'required|same:password'
            ],
            [
                'email.unique' => 'Email : ' . $email . ' sudah terdaftar !',
                'username.unique' => 'Username : ' . $username . ' sudah terdaftar !',
                'phone.unique' => 'No. Handphone : ' . $phone . ' sudah terdaftar !',
                'password.min' => 'Panjang password minimal 5 karakter !',
                'password_confirmation.same' => 'Konfirmasi password yang anda masukan salah !',
            ]
        );

        Admin::insert([
            'name' => $name,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'active' => 1,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akun Admin Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/akun/admin');
    }

    public function kelola_akun_admin(Request $request)
    {
        $dataAccount = Admin::where('id', $request->id)->first();

        if ($dataAccount) {
            $data = [
                'dataAccount' => $dataAccount,
            ];
            return view('admin.kelola_akun_admin', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data akun admin tidak ditemukan !</p>");
            return redirect()->to('/app-admin/akun/admin');
        }
    }

    public function proses_ubah_akun_admin(Request $request)
    {
        // wajib
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $username = $request->username;
        $status = $request->status;


        $data_admin = Admin::where('id', $id)->first();

        $rules = [];

        if ($request->email != $data_admin->email) {
            $rules['email'] = 'required|unique:administrators';
        } else {
            $rules['email'] = 'required';
        }

        if ($request->phone != $data_admin->phone) {
            $rules['phone'] = 'required|unique:administrators';
        } else {
            $rules['phone'] = 'required';
        }

        if ($request->username != $data_admin->username) {
            $rules['username'] = 'required|unique:administrators';
        } else {
            $rules['username'] = 'required';
        }

        $validateData = $request->validate($rules, [
            'phone.unique' => 'No. Handphone : ' . $phone . ' sudah terdaftar !',
            'email.unique' => 'Email : ' . $email . ' sudah terdaftar !',
            'username.unique' => 'Username : ' . $username . ' sudah terdaftar !',
        ]);

        Admin::where('id', $id)
            ->update([
                'name' =>  $name,
                'phone' =>  $phone,
                'email' =>  $email,
                'username' =>  $username,
                'active' =>  $status,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akun Admin Berhasil Diubah</p>");
        return redirect()->to('app-admin/kelola/akun/admin/' . $id);
    }

    public function proses_reset_password_akun_admin(Request $request)
    {
        $validatedData = $request->validate(
            [
                'password' => 'required|min:5',
                'password_confirmation' => 'required|same:password'
            ],
            [
                'password.min' => 'Panjang password minimal 5 karakter !',
                'password_confirmation.same' => 'Konfirmasi password yang anda masukan salah !',
            ]
        );

        $validateData['password'] = Hash::make($validatedData['password']);

        Admin::where('id', $request->id)
            ->update(['password' => $validateData['password']]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Password baru berhasil disimpan !</p>");
        return redirect()->to('app-admin/kelola/akun/admin/' . $request->id . '/?active=password');
    }
}
