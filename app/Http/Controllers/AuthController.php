<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function home()
    {
        return view("Login.login");
    }

    public function registration()
    {
        return view("Login.register");
    }
    
    public function register(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => "required|min:8"
        ]);

        $data = $request->all();
        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => Hash::make($data['password'])
        ]);


        return redirect("inicio");
    }

    public function inicio()
    {
        if (Auth::check()) {
            return view('index');
        } else {
           return redirect('login');
       }
    }

    public function login(request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect('index');
        }else{
            return redirect('login');
    }
    }

    public function signOut(){
        // Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function show(){
        $users = User::query()->orderBy('id')->get();

        return view('login.show', compact('users'));
    }
}