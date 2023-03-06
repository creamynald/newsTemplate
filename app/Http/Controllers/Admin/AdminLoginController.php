<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function admin_forget_password_submit(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data) {
            return redirect()->back()->with('error','Email address not found!');
        }

        $token = hash('sha256',time());

        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link for Reset Password: <br>';
        $message .= '<a href="'.$reset_link.'">Click here</a>';

        \Illuminate\Support\Facades\Mail::to($request->email)->send(new Websitemail($subject,$message));
        
        return redirect()->route('admin_login')->with('success','Password reset link has been sent to your email address!');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = 
        [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(\Illuminate\Support\Facades\Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Invalid Credentials!');
        }

    }
    
    public function logout(){
        \Illuminate\Support\Facades\Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    public function reset_password($token, $email){
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();

        if(!$admin_data){
            return redirect()->route('admin_login')->with('error','Invalid Token');
        }

        return view('admin.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request){
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $admin_data = Admin::where('token', $request->token)->where('email', $request->email)->first();

        $admin_data->password = \Illuminate\Support\Facades\Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();


        return redirect()->route('admin_login')->with('success','Password changed successfully! Please login with new password');
    }
}
