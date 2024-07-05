<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePenyewa() {
        return view('penyewaHome');
    }

    public function HomePekerja() {
        return view('pekerjaHome');
    }

    public function AdminDashboard(){
        return view('Dashboard');
    }
}
