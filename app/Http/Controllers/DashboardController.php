<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user() {
        if(Auth::check()) {
        return view('dashboard.user');
    }

    return redirect()->route('login.login')
    ->withErrors([
        'notif' => 'Please Login to acces the dasboard.',
    ])->onlyInput('email');
    }
    public function admin() {
        if(Auth::check()) {
            return view('dashboard.admin');
        }

        return redirect()->route('login.login')
        ->withErrors([
            'notif' => 'Please Login to acces the dasboard.',
        ])->onlyInput('email');
    }
}
