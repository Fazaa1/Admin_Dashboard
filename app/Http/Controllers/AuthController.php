<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(StoreAuthRequest $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            if (auth()->user()->role_id ==1)
            { return redirect()->route('dashboard.user'); }  else
            { return redirect()->route('dashboard.admin'); }          
        }
        return back()->withErrors([
            'notif' => 'credential do not match our records',
        ])->onlyInput('Email');
    }
}

