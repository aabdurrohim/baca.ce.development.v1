<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('mahasiswa.login-register.index');
    }

}