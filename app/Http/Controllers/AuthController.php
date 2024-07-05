<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $credentials = $request->only('username','password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('penyewa-home');
        }
        return redirect()->route('login');
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(),[
            'username'=>'required',
            'email'=>'required|email|unique:users,email',
            'telepon'=>'required',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withError($validator->errors());
        }

        $data['username']=$request->username;
        $data['email']=$request->email;
        $data['telepon']=$request->telepon;
        $data['password']=Hash::make($request->password);

        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('penyewa-home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'telepon' => 'required',
            'password' => 'sometimes|required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $user->username = $request->username;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save(); 
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::user();

        $user->sessions()->delete();

        $user->delete();

        Auth::logout();
    }
}
