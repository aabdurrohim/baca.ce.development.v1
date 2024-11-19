<?php

namespace App\Http\Controllers;

class BasicController extends Controller
{
    public function welcome()
    {
        return view('mahasiswa.welcome.index');
    }
    public function index()
    {
        return view('admin.layouts.base');
    }
    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
}