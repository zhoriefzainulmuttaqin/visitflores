<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Partner;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountPartnerController extends Controller
{
    public function profil()
    {
        return view('partner.profil');
    }

    public function proses_ubah_profil(Request $request)
    {
        // wajib
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $username = $request->username;


        $data_admin = Partner::where('id', $id)->first();

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

        Partner::where('id', $id)
            ->update([
                'name' =>  $name,
                'phone' =>  $phone,
                'email' =>  $email,
                'username' =>  $username,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Profil Berhasil Diubah</p>");
        return redirect()->to('app-mitra/profil');
    }

    public function proses_reset_password_profil(Request $request)
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

        Partner::where('id', $request->id)
            ->update(['password' => $validateData['password']]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Password baru berhasil disimpan !</p>");
        return redirect()->to('app-mitra/profil');
    }    
}
