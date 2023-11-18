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
        return redirect()->to('app-admin/kelola/akun/admin/' . $request->id);
    }

    public function profil()
    {
        return view('admin.profil');
    }

    public function proses_ubah_profil(Request $request)
    {
        // wajib
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $username = $request->username;


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
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Profil Berhasil Diubah</p>");
        return redirect()->to('app-admin/profil');
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

        Admin::where('id', $request->id)
            ->update(['password' => $validateData['password']]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Password baru berhasil disimpan !</p>");
        return redirect()->to('app-admin/profil');
    }

    public function akun_pengguna()
    {
        $users = User::orderBy('name', 'asc')->get();

        $data = [
            'users' => $users,
        ];
        return view('admin.akun_pengguna', $data);
    }

    public function kelola_akun_pengguna(Request $request)
    {
        $dataAccount = User::where('id', $request->id)->first();

        if ($dataAccount) {
            $data = [
                'dataAccount' => $dataAccount,
            ];
            return view('admin.kelola_akun_pengguna', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data akun pengguna tidak ditemukan !</p>");
            return redirect()->to('/app-admin/akun/pengguna');
        }
    }

    public function proses_ubah_akun_pengguna(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        User::where('id', $id)
            ->update([
                'active' =>  $status,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akun Pengguna Berhasil Diubah</p>");
        return redirect()->to('app-admin/kelola/akun/pengguna/' . $id);
    }

    public function proses_reset_password_akun_pengguna(Request $request)
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

        User::where('id', $request->id)
            ->update(['password' => $validateData['password']]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Password baru berhasil disimpan !</p>");
        return redirect()->to('app-admin/kelola/akun/pengguna/' . $request->id);
    }

    public function akun_mitra()
    {
        $partners = Partner::orderBy('name', 'asc')->get();

        $data = [
            'partners' => $partners,
        ];
        return view('admin.akun_mitra', $data);
    }

    public function tambah_akun_mitra()
    {
        return view('admin.tambah_akun_mitra');
    }

    public function pilih_tipe_akun_mitra(Request $request)
    {
        $type = $request->type;

        if ($type == 1) {
            $child = Tour::all();
        } elseif ($type == 2) {
            $child = Shop::all();
        } elseif ($type == 3) {
            $child = Restaurant::all();
        } elseif ($type == 4) {
            $child = Accomodation::all();
        } else {
            $child = NULL;
        }

        if ($request->id) {
            $dataAccount = Partner::where('id', $request->id)->first();

            if ($dataAccount->type == 1) {
                $child_selected =  Tour::where('id', $dataAccount->child_id)->first();
            } elseif ($dataAccount->type == 2) {
                $child_selected =  Shop::where('id', $dataAccount->child_id)->first();
            } elseif ($dataAccount->type == 3) {
                $child_selected =  Restaurant::where('id', $dataAccount->child_id)->first();
            } elseif ($dataAccount->type == 4) {
                $child_selected =  Accomodation::where('id', $dataAccount->child_id)->first();
            }
        } else {
            $child_selected = NULL;
            $dataAccount = NULL;
        }

        $data = [
            'child' => $child,
            'child_selected' => $child_selected,
            'type' => $type,
            'dataAccount' => $dataAccount,
        ];

        return view('admin.tipe_akun_mitra', $data);
    }

    public function proses_tambah_akun_mitra(Request $request)
    {
        $type = $request->type;
        $child_id = $request->child_id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $username = $request->username;
        $password = $request->password;

        $validatedData = $request->validate(
            [
                'email' => ['required', 'unique:partners'],
                'username' => ['required', 'unique:partners'],
                'phone' => ['required', 'unique:partners'],
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

        Partner::insert([
            'type' => $type,
            'child_id' => $child_id,
            'name' => $name,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'active' => 1,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akun Mitra Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/akun/mitra');
    }

    public function kelola_akun_mitra(Request $request)
    {
        $dataAccount = Partner::where('id', $request->id)->first();

        if ($dataAccount->type == 1) {
            $child = Tour::all();
            $type = 1;
        } elseif ($dataAccount->type == 2) {
            $child = Shop::all();
            $type = 2;
        } elseif ($dataAccount->type == 3) {
            $child = Restaurant::all();
            $type = 3;
        } elseif ($dataAccount->type == 4) {
            $child = Accomodation::all();
            $type = 4;
        } else {
            $child = NULL;
            $type = 0;
        }

        if ($dataAccount) {
            $data = [
                'dataAccount' => $dataAccount,
                'child' => $child,
                'type' => $type,
            ];
            return view('admin.kelola_akun_mitra', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data akun mitra tidak ditemukan !</p>");
            return redirect()->to('/app-admin/akun/mitra');
        }
    }

    public function proses_ubah_akun_mitra(Request $request)
    {
        // wajib
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $username = $request->username;
        $status = $request->status;
        $type = $request->type;
        $child_id = $request->child_id;


        $data_mitra = Partner::where('id', $id)->first();

        $rules = [];

        if ($request->email != $data_mitra->email) {
            $rules['email'] = 'required|unique:partners';
        } else {
            $rules['email'] = 'required';
        }

        if ($request->phone != $data_mitra->phone) {
            $rules['phone'] = 'required|unique:partners';
        } else {
            $rules['phone'] = 'required';
        }

        if ($request->username != $data_mitra->username) {
            $rules['username'] = 'required|unique:partners';
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
                'type' =>  $type,
                'child_id' =>  $child_id,
                'name' =>  $name,
                'phone' =>  $phone,
                'email' =>  $email,
                'username' =>  $username,
                'active' =>  $status,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akun Mitra Berhasil Diubah</p>");
        return redirect()->to('app-admin/kelola/akun/mitra/' . $id);
    }

    public function proses_reset_password_akun_mitra(Request $request)
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
        return redirect()->to('app-admin/kelola/akun/mitra/' . $request->id);
    }
}
