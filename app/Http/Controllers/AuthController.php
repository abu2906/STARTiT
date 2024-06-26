<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('Autentikasi.auth');
    }

    public function login(Request $request) {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $data = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($data)){
            $user = Auth::user(); 
            if($user->tipePengguna == 'penyewa'){ 
                return redirect()->route('penyewa-home');
            } elseif ($user->tipePengguna=='admin') {
                return redirect()->route('admin-dashboard');
            };

            return redirect()->route('pekerja-home');
        }else{
            return redirect()->route('login')->with('failed','Login Ulang bre, keknya salah deh');
        };
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(),[
            'username'=>'required',
            'email'=>'required|email',
            'telepon'=>'required',
            'tipePengguna'=>'required',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withError($validator->errors());
        }

        $data['username']=$request->username;
        $data['email']=$request->email;
        $data['telepon']=$request->telepon;
        $data['password']=Hash::make($request->password);
        $data['tipePengguna']=$request->tipePengguna;

        User::create($data);
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
