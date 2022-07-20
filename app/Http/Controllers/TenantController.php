<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\Tenants;
use App\Models\Area;
use App\Models\Rent;
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
        
        // $areas = Area::leftJoin('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('tenants.area_alloted', '=', Null)->orwhere('tenants.is_active', '=', '0')->get();
        $areas = Area::where('is_active', '=', '1')->where('alloted','=','0')->get();
        // $occupied_area = Area::select('area.id')->join('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('tenants.is_active',1)->get();

        // $occupied_area = $occupied_area->pluck('id')->toArray();
        // echo "<pre>";
        // print_r($occupied_area);
        // echo "<br><br>";
        // echo in_array(22, $occupied_area); 
        // die;

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

        if($request->hasFile('photo')){  
            $file = rand(10,99) . $request->file('photo')->getClientOriginalName() ;
            $request->file('photo')->move(public_path('uploads/tenant'), $file);    
        }else{
            $file = 'avatar.jpg';
        }

        if($request->hasFile('license')){  
            $license = $request['first_name'] . '_' . $request->file('license')->getClientOriginalName() ;
            $request->file('license')->move(public_path('uploads/tenant'), $license);  
        } 

        if($request->hasFile('registration')){  
            $registration = $request['first_name'] . '_' . $request->file('registration')->getClientOriginalName() ;
            $request->file('registration')->move(public_path('uploads/tenant'), $registration);  
        } 

        if($request->hasFile('insurance')){  
            $insurance = $request['first_name'] . '_' . $request->file('insurance')->getClientOriginalName() ;
            $request->file('insurance')->move(public_path('uploads/tenant'), $insurance);  
        } 

        if($request->hasFile('lease')){  
            $lease = $request['first_name'] . '_' . $request->file('lease')->getClientOriginalName() ;
            $request->file('lease')->move(public_path('uploads/tenant'), $lease);  
        } 

        $area = Area::find($request['area_alloted']);
        $area->alloted = 1;
        $area->save();

        $tenant = new Tenants();
        $tenant->first_name = $request['first_name'];
        $tenant->last_name = $request['last_name'];
        $tenant->phone_number = $request['phone_number'];
        $tenant->business_name = $request['business_name'];
        $tenant->email = $request['email'];
        $tenant->area_alloted = $request['area_alloted'];
        $tenant->acquiring_date = $request['acquiring_date'];
        $tenant->rent = $request['rent'];
        $tenant->maintenance = $request['maintenance'];
        $tenant->photo = $file;
        $tenant->license = $license;
        $tenant->registration = $registration;
        $tenant->insurance = $insurance;
        $tenant->lease = $lease;
        $result = $tenant->save();


        $tenant = Tenants::orderBy('created_at', 'desc')->first();

        $last_rent = Rent::orderBy('created_at', 'desc')->first();

        $rent = new Rent();
        $rent->invoice_no = $last_rent->invoice_no +1;
        $rent->t_id = $tenant->id;//['t_id'];
        $rent->a_id = $tenant->area_alloted;//['a_id'];
        $rent->rent = $tenant->rent;
        $rent->maintenance = $tenant->maintenance;
        $rent->total_amount = $tenant->rent + $tenant->maintenance;
        $rent->generation_date = $tenant->acquiring_date;//date('Y-m-d');
        $rent->next_generation_date = date('Y-m-d', strtotime('+1 month', strtotime($tenant->acquiring_date)));
        $rent->generated = '0';
        $rent->status = 'unpaid';
        $rent->save();


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
        // $areas = Area::where('is_active', '=', '1')->where('alloted','=','0')->orWhere('id', '=', $id)->get();

        $areas = DB::select("SELECT * from area where is_active=1 AND alloted=0 OR id=".$tenant->area_alloted);// Area::where('is_active', '=', '1')->where('alloted','=','0')->get();
        // $areas = Area::select('tenants.*', 'area.*', 'area.id as a_id')->leftJoin('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('tenants.area_alloted', '=', Null)->orwhere('tenants.area_alloted', '=', $tenant->area_alloted)->get();
        // $areas = Area::where('is_active', '=', '1')->get(); ->where('area.is_active', '=', '1')->orwhere('tenants.is_active', '=', '1')
        // $occupied_area = Area::select('area.id')->join('tenants' ,'area.id' , '=', 'tenants.area_alloted')->where('tenants.is_active',1)->where('area.id', '!=', $tenant->area_alloted)->get();

        // $occupied_area = $occupied_area->pluck('id')->toArray();
        
        // echo "<pre>"; print_r($tenant);  die;

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
        // echo $request['area_alloted']; die;

        $area = Area::find($request['area_alloted']);
        if($request['is_active'] == 1){
            $area->alloted = 1;
        }else{
            $area->alloted = 0;
        }
       
        $area->save();


        $tenant = Tenants::find($id);
        $tenant->first_name = $request['first_name'];
        $tenant->last_name = $request['last_name'];
        $tenant->phone_number = $request['phone_number'];
        $tenant->business_name = $request['business_name'];
        $tenant->email = $request['email'];
        $tenant->area_alloted = $request['area_alloted'];
        $tenant->acquiring_date = $request['acquiring_date'];
        $tenant->rent = $request['rent'];
        $tenant->maintenance = $request['maintenance'];
        $tenant->is_active = $request['is_active'];
        if($request->hasFile('photo')){  
            $file = rand(10,99) . $request->file('photo')->getClientOriginalName() ;
            $request->file('photo')->move(public_path('uploads/tenant'), $file);
            $tenant->photo = $file;
        }

        if($request->hasFile('license')){  
            $license = $request['first_name'] . '_' . $request->file('license')->getClientOriginalName() ;
            $request->file('license')->move(public_path('uploads/tenant'), $license);  
            $tenant->license = $license;
        } 

        if($request->hasFile('registration')){  
            $registration = $request['first_name'] . '_' . $request->file('registration')->getClientOriginalName() ;
            $request->file('registration')->move(public_path('uploads/tenant'), $registration);  
            $tenant->registration = $registration;
        } 

        if($request->hasFile('insurance')){  
            $insurance = $request['first_name'] . '_' . $request->file('insurance')->getClientOriginalName() ;
            $request->file('insurance')->move(public_path('uploads/tenant'), $insurance); 
            $tenant->insurance = $insurance; 
        } 

        if($request->hasFile('lease')){  
            $lease = $request['first_name'] . '_' . $request->file('lease')->getClientOriginalName() ;
            $request->file('lease')->move(public_path('uploads/tenant'), $lease);  
            $tenant->lease = $lease;
        } 
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
        $tenant = Tenants::find($id);
        
        $area = Area::find($tenant->area_alloted);        
        $area->alloted = 0;
        $area->save();

        $tenant->delete();

        Alert::success('Deleted', 'Tenant is Successfully Deleted');
        return redirect('tenant_list');
    }
}
