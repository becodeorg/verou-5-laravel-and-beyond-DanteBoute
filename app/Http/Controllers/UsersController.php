<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function create(){
        return view('sessions/sign_up');
    }

    public function show(){
        return view('sessions/login');
    }

    public function store(Request $request){
        $validated = $request->validate([
        "name" => "required|min:3|max:60",
        "email" => "required|email",
        "password" => "required|min:3|confirmed"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        auth()->login($user);


        return redirect("/");
    }
    public function login (Request $request)
    {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect("/");
        }
        return back();
    }
}