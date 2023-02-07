<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Symfony\Contracts\Service\Attribute\Required;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.loginn');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::guard('users')->attempt($validatedData)) {
            return redirect()->route('dashboard');
        }
        else{
            return view('admin.loginn')->with('msg', 'Wrong username or password');
        }
    }

    public function dashboard()
    {
        if(!auth()->guard('users')->user()){
            return redirect()->route('login-page');
        }
        else{
            return view('admin.dashboard');
        }
    }

    public function logout(){
        auth()->guard('users')->logout();
    }

}
