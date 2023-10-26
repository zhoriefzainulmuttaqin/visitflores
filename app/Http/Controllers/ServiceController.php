<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function product_services(){
        return view("user.product_services");
    }
    public function our_services(){
        return view("user.our_services");
    }
    public function service_consultant(){
        return view("user.service_consultant");
    }
    public function service_conceptor(){
        return view("user.service_conceptor");
    }
    public function service_marketing(){
        return view("user.service_marketing");
    }
}
