<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller

{
    public function home()
    {
        $jobs = Job::with('user')->get(); // Mengambil semua pekerjaan beserta user terkait
        return view('home', compact('jobs'));
    }

    public function AdminDashboard(){
        return view('Dashboard');
    }
}
