<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function LoginView (Request $request) 
    {
        return view('LoginUser', [
            'request' => $request,
            'title' => 'Вход'
        ]);
    }

    public function Login (Request $request) 
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->intended('/dashboard');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Неверный логин или пароль' 
            ]);
        }        
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('welcomepage');
    }
}
