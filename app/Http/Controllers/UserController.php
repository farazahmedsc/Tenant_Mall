<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Area;
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

        if($request->hasFile('photo')){  
            $file = rand(10,99) . $request->file('photo')->getClientOriginalName() ;
            $request->file('photo')->move(public_path('uploads/user'), $file);
    
        }else{
            $file = 'avatar.jpg';
        }

        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->phone_number = $request['phone_number'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->type = $request['type'];
        $user->photo = $file;
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
        if($request->hasFile('photo')){  
            $file = rand(10,99) . $request->file('photo')->getClientOriginalName() ;
            $request->file('photo')->move(public_path('uploads/user'), $file);
            $user->photo = $file;
        }
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

    public function my_account(){
        return view('adminpanel.my_account');
    }

    public function my_account_update(Request $request){
        $user = User::find(session('user')['id']);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->phone_number = $request['phone_number'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        

        

        if($request->hasFile('photo')){  
            $file = rand(10,99) . $request->file('photo')->getClientOriginalName() ;
            $request->file('photo')->move(public_path('uploads/user'), $file);
            $user->photo = $file;
        }
        $result = $user->save();

        $user = User::find(session('user')['id']);
        session()->put('user',$user);
        
        if($result){
            Alert::success('Congrats', 'Info is Successfully Updated');
            return redirect('my_account');
        }else{
            Alert::error('Error', 'Info Failed to Update');
            return redirect('my_account');
        }
    }

    public function shops(){
        $frontshops = Area::select('tenants.*', 'area.name as a_name' , 'area.id as a_id', 'area.type_detail as a_type_detail')->join('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('area.type_detail', '=', 'Front Shop')->orwhere('tenants.is_active', '=', '0')->get();
        $centershops = Area::select('tenants.*', 'area.name as a_name' , 'area.id as a_id', 'area.type_detail as a_type_detail')->join('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('area.type_detail', '=', 'Center Shop')->orwhere('tenants.is_active', '=', '0')->get();


        // echo "<pre>";
        // print_r($centershops); die;
        $data = compact('frontshops', 'centershops');
        return view('adminpanel.shops')->with($data);
    }
}
