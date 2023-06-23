<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'],
            'password' => 'required|confirmed|min:8',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' =>$request->phone_number,
        ]);

        return redirect()->route('welcome');
    }


}
