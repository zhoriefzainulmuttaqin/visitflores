<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    public function dashboard(){
        session()->flash('msg', "<b>Berhasil</b> <br> Halaman berhasil ditampilkan");
        session()->flash('msg_status', 'success');
        return view("admin.dashboard");
    }
}
