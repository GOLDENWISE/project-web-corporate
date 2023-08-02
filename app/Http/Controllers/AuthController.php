<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller{

  public function login() {
    
    $cssfilename = 'stylelogin';
    return view('auth', [
        "cssfilename" => $cssfilename
    ]);

  }

  public function authenticate(Request $request){

      $credentials = $request->validate([
          'username' => "required",
          'password' => "required"
      ]);

      if(Auth::attempt($credentials)){
        
        $request->session()->regenerate();
        return redirect()->intended('dashboard/cooperations');
      
      }else{

        return redirect()->intended('/login');

      }

  }

  public function logout() {

    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');

  }

}
