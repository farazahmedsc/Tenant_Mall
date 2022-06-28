<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\Tenants;
use App\Models\Area;
use RealRashid\SweetAlert\Facades\Alert;

class TenantController extends Controller
{
    public function __construct(){
    
    }

    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $tenants = Tenants::where('first_name','like',"%$search%")->orwhere('last_name', 'like', "%$search%")->orwhere('business_name', 'like', "%$search%")->orwhere('phone_number', 'like', "%$search%")->select('tenants.*' , 'area.id as area_id', 'area.name')->join('area', 'tenants.area_alloted' , '=', 'area.id')->paginate(10);
        }else{
            // $tenants = Tenants::paginate(10);
            $tenants = Tenants::select('tenants.*' , 'area.id as area_id', 'area.name')->join('area', 'tenants.area_alloted' , '=', 'area.id')->paginate(10);
            
        }
        $data = compact('tenants','search');
        return view('adminpanel/tenant/tenant-list',$data);
    }

    public function create(){
        $tenant = new Tenants();
        $areas = Area::where('is_active', '=', '1')->get();
        $label = "Add Tenant";
        $url = url('/tenant_store');
        $data = compact('tenant','label', 'url', 'areas');
        return view('adminpanel/tenant/tenant-add')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'rent' => 'required',
                'maintenance' => 'required'                
            ]
        );

        $tenant = new Tenants();
        $tenant->first_name = $request['first_name'];
        $tenant->last_name = $request['last_name'];
        $tenant->phone_number = $request['phone_number'];
        $tenant->business_name = $request['business_name'];
        $tenant->area_alloted = $request['area_alloted'];
        $tenant->acquiring_date = $request['acquiring_date'];
        $tenant->rent = $request['rent'];
        $tenant->maintenance = $request['maintenance'];
        $result = $tenant->save();

        if($result){
            Alert::success('Congrats', 'Tenant is Successfully Registered');
            return redirect('tenant_list');
        }else{
            Alert::error('Error', 'Tenant Failed to Add');
            return redirect('tenant_create');
        }
        
    }

    public function edit($id){
        $tenant = Tenants::find($id);
        $areas = Area::where('is_active', '=', '1')->get();

        if(!is_null($tenant)){
            $label = "Update Tenant";
            $url = url('/tenant/update'). "/" . $id;
            $data = compact('tenant', 'label', 'url', 'areas');
            return view('adminpanel/tenant/tenant-add')->with($data);
        }else{
            Alert::error('Error', 'Tenant not found');
            return redirect('tenant_list');
        }
    }

    public function update($id, Request $request){

        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'rent' => 'required',
                'maintenance' => 'required'                
            ]
        );

        $tenant = Tenants::find($id);
        $tenant->first_name = $request['first_name'];
        $tenant->last_name = $request['last_name'];
        $tenant->phone_number = $request['phone_number'];
        $tenant->business_name = $request['business_name'];
        $tenant->area_alloted = $request['area_alloted'];
        $tenant->acquiring_date = $request['acquiring_date'];
        $tenant->rent = $request['rent'];
        $tenant->maintenance = $request['maintenance'];
        $result = $tenant->save();

        
        if($result){
            Alert::success('Congrats', 'Tenant is Successfully Updated');
            return redirect('tenant_list');
        }else{
            Alert::error('Error', 'Tenant Failed to Update');
            return redirect('tenant_create');
        }
    }

    public function delete($id)
    {
        Tenants::find($id)->delete();
  
        Alert::success('Deleted', 'Tenant is Successfully Deleted');
        return redirect('tenant_list');
    }
}
