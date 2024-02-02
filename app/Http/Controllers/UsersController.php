<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create(){
        return view('sign_up');
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
        return redirect("/");
    }
}