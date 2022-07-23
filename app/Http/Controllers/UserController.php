<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Area;
use App\Models\Tenants;
use App\Models\Rent;
use App\Models\Expense;
use Session;


class UserController extends Controller
{
    public function __construct(){
    
    }

    public function index(){

        $alloted_shop = Tenants::where('is_active','1')->get()->count();
        $total_rent = Rent::where('status','=','paid')->sum('total_amount');
        $total_expense = Expense::where('is_active','1')->sum('amount');
        $total_user = User::where('is_active','1')->get()->count();
        // ->orWhere('status', '=', 'partially_paid')
        $month_rent = Rent::whereMonth('generation_date', date('m'))->sum('total_amount');
        $rent_collected = Rent::where('status','partially_paid')->orWhere('status','paid')->whereMonth('generation_date', date('m'))->sum('pay_amount');
        $total_rent_remaining = Rent::where('status','=','unpaid')->whereMonth('generation_date', date('m'))->sum('total_amount');
        $pay_rent_remaining = Rent::where('status','=','unpaid')->whereMonth('generation_date', date('m'))->sum('pay_amount');

        $rent_remaining = $total_rent_remaining - $pay_rent_remaining;
        $rent_percent = ($month_rent != 0) ? number_format( ($rent_collected * 100)/$month_rent ,1): 0;
        
        $recent_payments = Rent::select('rent.*', 'tenants.*', 'area.*', 'area.name as a_name')->join('tenants', 'rent.t_id','=','tenants.id')->join('area','rent.a_id','=','area.id')->where('rent.status','paid')->orderBy('rent.id','desc')->limit(5)->get();
        $unpaid_payments = Rent::select('rent.*', 'tenants.*', 'area.*', 'area.name as a_name')->join('tenants', 'rent.t_id','=','tenants.id')->join('area','rent.a_id','=','area.id')->where('rent.status','unpaid')->orderBy('rent.id','desc')->limit(5)->get();
        
        $search_date = date('Y') . '-01-01';
        $revenues_monthly = Rent::select(
            DB::raw('year(pay_date) as year'),
            DB::raw('month(pay_date) as month'),
            DB::raw('sum(pay_amount) as price'),
        )->where(DB::raw('date(pay_date)'), '>=', $search_date)
            ->where('status','paid')
            ->groupBy('year')
            ->groupBy('month')
            ->get()
            ->toArray();

        $expenses_monthly = Expense::select(
            DB::raw('year(expense_date) as year'),
            DB::raw('month(expense_date) as month'),
            DB::raw('sum(amount) as price'),
        )->where(DB::raw('date(expense_date)'), '>=', $search_date)
            ->where('is_active','1')
            ->groupBy('year')
            ->groupBy('month')
            ->get()
            ->toArray();

        $revenues = $expenses = array();
        $count_revenue = $count_expense = 0;
            for ($i=1; $i <=12 ; $i++) { 
                $temp = 0;
                if(!empty($revenues_monthly)){
                    if($revenues_monthly[$count_revenue]['month'] == $i && $revenues_monthly[$count_revenue]['year'] == date('Y')){
                        $temp = $revenues_monthly[$count_revenue]['price'];
                        if($count_revenue < count($revenues_monthly)-1){
                            $count_revenue++;
                        }                
                    }
    
                }
               
                array_push($revenues,$temp);



                $tempExpense =0;
                if(!empty($expenses_monthly)){
                    if($expenses_monthly[$count_expense]['month'] == $i && $expenses_monthly[$count_expense]['year'] == date('Y')){
                        $tempExpense = $expenses_monthly[$count_expense]['price'];
                        if($count_expense < count($expenses_monthly)-1){
                            $count_expense++;
                        }                
                    }
                }

                array_push($expenses,$tempExpense);

            }
        // echo "<pre>";
        // print_r($expenses);
        // echo "<br><br>";

        // print_r($expenses_monthly);
        
        // die;

        $data = compact('alloted_shop', 'total_rent', 'total_expense', 'total_user', 'month_rent', 'rent_collected', 'rent_remaining', 'rent_percent', 'recent_payments' ,'unpaid_payments' ,'revenues' , 'expenses');
        return view('adminpanel/dashboard')->with($data);
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
