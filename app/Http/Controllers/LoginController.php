<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " | Login";
        if($request->isMethod('post')) { 
            $login = $request->login;
            $password = $request->password;

            $user = User::where('email', $login)->orWhere('name', $login)->first();

            if(!$user) {
                $request->session()->flash('error', 'User not found');
                return back()->withInput();
                
            } else {
                if(!password_verify($password, $user->password)) {
                    $request->session()->flash('error', 'Password is incorrect');
                    return back()->withInput();
                    
                } else {
                    if(!$user->email_verified_at) {
                        $request->session()->flash('error', 'Account not verified');
                        return back()->withInput();
                        
                    }
                    
                    if($user->suspended) {
                        $request->session()->flash('error', 'Account suspended, please contact the live support.');
                        return back()->withInput();
                    
                    }
                    Auth::login($user);
                    return redirect('/user');
                }
                $request->session()->flash('error', 'Something went wrong, we are working on it');
                return back()->withInput();
                
            }
        } else {
            return view('auth.login', compact('page_title'));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
