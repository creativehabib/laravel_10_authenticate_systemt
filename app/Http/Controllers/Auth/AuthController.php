<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }
    public function loginView()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','The provided credentials are incorrect.');
        }
        return redirect()->intended('/');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
