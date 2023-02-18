<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
    	return view('auth.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username','password');
     if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('product');
        }


    }
    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}
