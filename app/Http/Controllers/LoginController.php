<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
         ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id'=> '1'])){
            return redirect()->intended('/home');
        } elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id'=> '2'])){
                return redirect()->intended('/siswa');
        } else {
            return back()->with('LoginError','Username atau Password anda salah!!'); 
        }
    }

    public function logout()
    {
        
    }
}
