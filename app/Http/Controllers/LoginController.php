<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function postlogin (Request $request){
    //     // dd($request->all());
    //      $this->validate($request,[
    //     'name' => 'required|max:50',
    //      ]);

    //     if(Auth::attempt($request->only('name','password'))){
    //         return redirect('/dashboard');
    //     }
    //     return redirect('/login');
    // }
    // public function logout(){
    //     Auth::logout();
    //     return redirect('/login');
    // }
}
