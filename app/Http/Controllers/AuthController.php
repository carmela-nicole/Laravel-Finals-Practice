<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function login(Request $request){

    //     // echo $request->username;
    //     // echo $request->password;
    // }

    public function index(){
        return view('login');
    }

     public function login(Request $request){

        $credentials = $request->only(['username','password']);


     if(Auth::attempt($credentials)){
            return redirect('/');
        }
    else{
        return redirect()->back()->withErrors(['message'=>'Mali ka nga!!! Kilit!!!']);
    }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

    public function register(){
        return view ('register');
    }

    public function create(Request $request){
        $validate = $request->validate([
            'name'=>'required|max:20',
            'username' => 'required|unique:users|min:5|max:20',
            'password' => 'required|min:8|max:20'
            ]);

        $validate['password']=Hash::make($validate['password']);
        User::create($validate);
   

    if($user){
        return redirect("/login");
    }
}
}


