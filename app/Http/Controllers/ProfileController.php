<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    
    public function showProfile(){
        $user = auth()->user();
        return view('Profile.profile',compact('user'));
    }
    
}


