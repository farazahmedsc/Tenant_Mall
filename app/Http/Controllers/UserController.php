<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
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
        $user = User::where('username' ,'=', $request->input('username'))->orwhere('email' ,'=', $request->input('username'))->first();

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

    public function user_list(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $users = User::where('first_name','like',"%$search%")->orwhere('last_name', 'like', "%$search%")->orwhere('phone_number', 'like', "%$search%")->orwhere('email', 'like', "%$search%")->orwhere('type', 'like', "%$search%")->paginate(10);
        }else{
            $users = User::paginate(10);
        }
        $data = compact('users','search');

        return view('adminpanel/user/user-list')->with($data);
    }
    public function create(){
        $user = new User();
        $label = "Add User";
        $url = url('/user_store');
        $data = compact('user','label', 'url');
        return view('adminpanel/user/user-add')->with($data);
    }

    public function store(Request $request){

        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'type' => 'required'
            ]
        );

        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->phone_number = $request['phone_number'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->type = $request['type'];
        $result = $user->save();

        if($result){
            Alert::success('Congrats', 'User is Successfully Registered');
            return redirect('user_list');
        }else{
            Alert::error('Error', 'User Failed to Add');
            return redirect('user_create');
        }
        
    }

    public function edit($id){
        $user = User::find($id);
        if(!is_null($user)){
            $label = "Update User";
            $url = url('/user/update'). "/" . $id;
            $data = compact('user', 'label', 'url');
            return view('adminpanel/user/user-add')->with($data);
        }else{
            Alert::error('Error', 'User not found');
            return redirect('user_list');
        }
    }

    public function update($id, Request $request){
        $user = User::find($id);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->phone_number = $request['phone_number'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->type = $request['type'];       
        $user->is_active = $request['is_active'];
        $result = $user->save();
        
        if($result){
            Alert::success('Congrats', 'User is Successfully Updated');
            return redirect('user_list');
        }else{
            Alert::error('Error', 'User Failed to Update');
            return redirect('user_create');
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
  
        Alert::success('Deleted', 'User is Successfully Deleted');
        return redirect('user_list');
    }
}
