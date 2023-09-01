<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public const ADMIN = 1;
    public const USER = 2;
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
        $user = (new User())->getUserByEmailOrPhone($request->all());
//        if ($user && Hash::check($request->input('password'), $user->password)){
//            return redirect()->intended('dashboard');
//        }
//        if (Auth::attempt(['email' => $user->email, 'password' => $user->password, 'status' => 1])) {
//            return redirect()->intended('dashboard');
//        }
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])){
            return back()->with('status','The provided credentials are incorrect.');
        }
        return redirect()->intended('dashboard');
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
        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
