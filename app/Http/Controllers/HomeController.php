<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePenyewa() {
        return view('home');
    }

    public function HomePekerja() {
        return view('home2');
    }

    // public function HomePekerja(){
    //     $user = auth()->user();
    //     return view('Profile.pekerja_profile',compact('user'));
    // }

    public function AdminDashboard(){
        return view('Dashboard');
    }

    public function penyewaProfile(){
        return view('Profile.penyewa_profile');
    }

    public function showProfile(){
        return view('Profile.pekerja_profile');
    }
}
