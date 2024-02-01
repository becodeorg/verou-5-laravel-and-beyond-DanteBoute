<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        return view('sign_up');
    }
    public function store(Request $new_user){
        User::create($new_user->all());
        
        return $this->index();
    }
}