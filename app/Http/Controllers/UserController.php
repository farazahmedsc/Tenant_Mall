<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\User;
use Session;


class UserController extends Controller
{
    public function __construct(){
    
    }

    public function index(){
        return view('adminpanel/dashboard');
    }

    public function authenticate(Request $request){
        $user = User::where('username' ,'=', $request->input('username'))->first();

        if($user){
           if($user['password'] == $request->input('password')){               
               session()->put('user', $user);                
                return redirect('/');
           }else{
            $msg = "Password not match";
            
           }
        }else{
            $msg = "No user found";
        }
        $request->session()->flash('error', $msg);
        return redirect('/'); 
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
