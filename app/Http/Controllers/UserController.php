<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function getUser($user) {
        return User::where('name', $user)->orWhere('email', $user)->first();
    }
    
}
