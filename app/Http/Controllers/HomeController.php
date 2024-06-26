<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePenyewa() {
        return view('home');
    }

    public function HomePekerja(){
        $user = auth()->user();
        return view('Profile.pekerja_profile',compact('user'));
    }

    public function AdminDashboard(){
        return view('Dashboard');
    }

    public function showProfile(){
        $user = auth()->user();
        return view('Profile.penyewa_profile',compact('user'));
    }
}
