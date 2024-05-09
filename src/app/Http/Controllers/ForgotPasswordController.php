<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function ForgotPasswordView () 
    {
        return view('forgotpassword');
    }

    public function ForgotPassword (Request $request) 
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
        ]);
   
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', trans('status'));
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => trans($status)]);
    }
}
