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
    public function index()
    {
        return view('Autentikasi.auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('failed', 'Username atau Password salah');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = $request->only('username', 'email', 'telepon');
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user(); // Ambil user yang sedang login

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->telepon = $request->input('noTelp');
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function deleteProfile(Request $request)
    {
        $user = Auth::user();
        $user->sessions()->delete();
        $user->delete();
        Auth::logout();
        return redirect()->route('login');
    }
}
