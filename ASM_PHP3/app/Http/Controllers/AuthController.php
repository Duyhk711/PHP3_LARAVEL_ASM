<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showFormLogin(){
        $title="Trang Login";
        return view('auth.login',compact('title'));
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
                return redirect()->intended('/admins/dashboard');
            }
            return redirect()->intended('/');
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
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            
            'password' => Hash::make($data['password']),
         
        ]);
   
        Auth::login($user);

        return redirect()->route('trang_chu');
        // dd($data);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function forgetPass(){
        $title="Quên mật khẩu:";
        return view('auth.forgotPassword',compact('title'));
    }

 public function postForgetPass(Request $request){
      $request->validate([
        'email'=>'required|exists:users'
      ],[
        'email.required'=>'Vui lòng nhập địa chỉ email hợp lệ',
        'email.exists'=>'Email này không tồn tại trong hệ thống'
      ]);
    $token=strtoupper(Str::random(10));
    $user=User::where('email',$request->email)->first();
    $user->update(['token'=>$token]);
        Mail::send('auth.check_email_forgot',compact('user'),function($email) use($user){
            $email->subject('MyShoping- Lấy lại mật khẩu tài khoản');
            $email->to($user->email,$user->name);
        });
    
       return redirect()->route('login')->with('yes','Vui lòng check mail để thực hiện thay đổi mật khẩu');
    }

    public function getPass( User $user,$token ){
        if($user->token === $token){
            return view('auth.updatePassword');
        }
    }
    public function postGetPass( Request $request, User $user, $token ){
        $request->validate([
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
        $password_h= bcrypt($request->password);
        $user->update(['password' => $password_h,'token'=>null]);
        return redirect()->route('login')->with('yes','Đặt lại mật khẩu thành công ');

    }


}
