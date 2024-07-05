<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{

    public function penyewaProfile() {
        $user = auth()->user();
        return view('Profile.penyewa_profile',compact('user'));
    }
    
    public function pekerjaProfile() {
        $user = auth()->user();
        return view('Profile.pekerja_profile',compact('user'));
    }
    
    public function showProfile(){
        $user = auth()->user();
        return view('profile',compact('user'));
    }
}


