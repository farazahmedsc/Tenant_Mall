<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\Company;


class CompanyController extends Controller
{
    public function __construct(){
    
    }

    public function index(){
        $company = Company::first();
        return view('adminpanel/settings')->with(compact('company'));
    }

    public function setting_update(Request $request){
        $company = Company::find(1);
        $company->name = $request['name'];
        $company->street = $request['street'];
        $company->apt = $request['apt'];
        $company->zip = $request['zip'];
        $company->state = $request['state'];
        $company->city = $request['city'];
        $company->phone_number = $request['phone_number'];
        $company->email = $request['email'];
        $company->description = $request['description'];
        $result = $company->save();

        if($result){
            Alert::success('Congrats', 'Info is Updated Successfully');
            return redirect('setting');
        }else{
            Alert::error('Error', 'Info Failed to Update');
            return redirect('setting');
        }

    }

}
