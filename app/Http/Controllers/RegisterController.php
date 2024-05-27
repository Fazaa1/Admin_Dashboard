<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;


class RegisterController extends Controller
{
    Public function create() {
            return view('/auth.register');
    }
    Public function store(StoreRegistRequest $request) {
        $profile = new Profile;
        $profile->umur = $request->age;
        $profile->bio  = $request->bio;
        $profile->alamat =  $request->alamat;
        $profile->save();

        $user = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'profile_id'    => $profile->id,
            'role_id'       => 1,
        ]);
    }
}
