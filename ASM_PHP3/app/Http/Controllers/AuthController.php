<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view('auth.login');
    }



    public function login(Request $request){
        // dd($request);
        $user = $request->validate([
            'email'=> 'required|string|email|max:255',
            'password' => 'required|string',
    
        ]);
    //    dd($user);
        
        if(Auth::attempt($user)){
            
            if(Auth::check() && Auth::user()->role === User::ROLE_ADMIN){
                return redirect()->intended('dashboard');
            }
            return redirect()->intended('home');
        }

            return redirect()->back()->withErrors([
                'email' => 'Thông tin người dùng không đúng'
            ]);

    }


    public function showFormRegister(){
        return view('auth.register');
    }



    public function register(Request $request){
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'so_dien_thoai' => 'required|numeric|min:11',
            'dia_chi' => 'required|string',
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'so_dien_thoai' => $data['so_dien_thoai'],
            'dia_chi' => $data['dia_chi'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);

        return redirect()->intended('home');
        // dd($data);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }



}