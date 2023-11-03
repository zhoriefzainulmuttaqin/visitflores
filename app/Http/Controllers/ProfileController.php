<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function process_change_profile_photo(Request $request)
    {
        $validatedData = $request->validate(
            [
                'image' => 'image',
            ],
            [
                'image.image' => 'Format gambar tidak di dukung !',
            ]
        );

        if ($request->file('image')) {
            $user = User::where('id', Auth()->user()->id)->first();
            if ($user->picture != NULL) {
                unlink(('./assets/profil/') . $user->picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/profil/', $nameImage);

            User::where('id', Auth()->user()->id)
                ->update([
                    'picture' =>  $nameImage,
                ]);

            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5 class='mb--5'>Berhasil</h5><p class='b3'>Gambar profil berhasil disimpan !</p>");
            return redirect()->to('profil');
        }
    }

    public function change_profile_biodata()
    {
        return view('user.profile_biodata');
    }

    public function process_change_profile_biodata(Request $request)
    {
        // wajib
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $username = $request->username;

        // optional
        // (Boleh kosong)
        $address = $request->address == "" ? NULL :  $request->address;

        $data_user = User::where('id', Auth()->user()->id)->first();

        $rules = [];

        if ($request->email != $data_user->email) {
            $rules['email'] = 'required|unique:users';
        } else {
            $rules['email'] = 'required';
        }

        if ($request->phone != $data_user->phone) {
            $rules['phone'] = 'required|unique:users';
        } else {
            $rules['phone'] = 'required';
        }

        if ($request->username != $data_user->username) {
            $rules['username'] = 'required|unique:users';
        } else {
            $rules['username'] = 'required';
        }

        $validateData = $request->validate($rules, [
            'email.unique' => 'Email ' . $email . ' sudah terdaftar !',
            'username.unique' => 'Username ' . $username . ' sudah terdaftar !',
            'phone.unique' => 'No. Handphone ' . $phone . ' sudah terdaftar !',
        ]);

        User::where('id', Auth()->user()->id)
            ->update([
                'name' =>  $name,
                'phone' =>  $phone,
                'username' => $username,
                'email' => $email,
                'address' => $address,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5 class='mb--5'>Berhasil</h5><p class='b3'>Biodata diri berhasil disimpan !</p>");

        return redirect()->to('profil');
    }

    public function change_profile_password()
    {
        return view('user.profile_password');
    }

    public function process_change_profile_password(Request $request)
    {
        $rules = [
            'password' => 'min:5',
            'password_confirmation' => 'same:password'
        ];

        $validateData = $request->validate($rules, [
            'password.min' => 'Panjang password minimal 5 karakter !',
            'password_confirmation.same' => 'Konfirmasi password salah !',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::where('id', Auth()->user()->id)
            ->update(['password' => $validateData['password']]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5 class='mb--5'>Berhasil</h5><p class='b3'>Password baru berhasil disimpan !</p>");
        return redirect()->to('profil');
    }
}
