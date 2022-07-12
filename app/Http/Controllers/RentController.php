<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;


use App\Models\Rent;
use App\Models\Tenants;
use App\Models\Area;
use App\Models\Company;
use RealRashid\SweetAlert\Facades\Alert;

use PDF;

class RentController extends Controller
{
    public function __construct(){
    
    }

    public function index(){
        // $rents = Rent::select('tenants.*', 'area.*','area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status', 'MONTH(rent.generation_date) as start_month')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.created_at', '>=', date('Y-m-d', strtotime('-7 month')))->get();

        $rents = DB::select('SELECT tenants.*, area.*, rent.*, area.id as a_id, area.name as a_name, rent.rent as r_rent, rent.maintenance as r_maintenance, rent.status as r_status,rent.id as r_id , MONTH(rent.generation_date) as start_month from rent inner join area on rent.a_id=area.id inner join tenants on rent.t_id=tenants.id where rent.created_at >='.date('Y-m', strtotime('-5 month')) . ' ORDER BY tenants.id,rent.created_at ');

        // $rents = DB::table('rent')   
        // ->selectRaw('SELECT tenants.*, area.*, rent.*, area.id as a_id, area.name as a_name, rent.rent as r_rent, rent.maintenance as r_maintenance, rent.status as r_status, MONTH(rent.generation_date) as start_month from rent inner join area on rent.a_id=area.id inner join tenants on rent.t_id=tenants.id')
        // ->whereRaw('rent.created_at >='.date('Y-m', strtotime('-5 month')))
        // // ->orderByRaw(' tenants.id,rent.created_at')
        // ->paginate(1);

        // echo "<pre>"; print_r($rents); die;
        // $rents = $this->arrayPaginator($rents, $request);
        $data = compact('rents');
        return view('adminpanel.rent.rent-history')->with($data);
    }

    public function pay_rent(Request $request){
        $rent = Rent::find($request->rent_id);
        $rent->pay_amount = $request->pay_amount;
        $rent->pay_date = date('Y-m-d');
        $rent->status = 'paid';
        $result = $rent->save();

        if($result){
            Alert::success('Congrats', 'Rent is Successfully Paid');
            return redirect('rent_history');
        }else{
            Alert::error('Error', 'Rent Failed to Paid');
            return redirect('rent_history');
        }

    }

    public function invoice_list(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $rents = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.invoice_no','like',"%$search%")->orwhere('tenants.first_name','like',"%$search%")->orwhere('tenants.last_name','like',"%$search%")->orwhere('tenants.phone_number','like',"%$search%")->orwhere('area.name','like',"%$search%")->orwhere('rent.total_amount','like',"%$search%")->orwhere('rent.generation_date','like',"%$search%")->orwhere('rent.status','like',"%$search%")->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->paginate(10);
        }else{
            $rents = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->paginate(10);
        }
       

        $data = compact('rents', 'search');
        return view('adminpanel.rent.invoices-list')->with($data);
    }

    public function pay_rent2(Request $request){
        $rent = Rent::find($request->r_id);
        // $rent = Rent::where('invoice_no', $request->invoice_no);
        $rent->pay_amount = $request->total_amount;
        $rent->pay_date = date('Y-m-d');
        $rent->status = 'paid';
        $result = $rent->save();

        if($result){
            Alert::success('Congrats', 'Rent is Successfully Paid');
            return redirect('invoice_list');
        }else{
            Alert::error('Error', 'Rent Failed to Paid');
            return redirect('invoice_list');
        }

    }

    public function generate_pdf($id){
        $rent = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.id',$id)->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->first();

        $company = Company::find(1);
        $url = env('APP_URL') . '/uploads/tenant/' . $rent->photo;

        //$url = 'images/V.png';url('/') . 'http://localhost/Tenant_Mall/public'
        $type = pathinfo($url, PATHINFO_EXTENSION);
        $data = file_get_contents($url);
        $url = 'data:image/' . $type . ';base64,' . base64_encode($data);


        $data = compact('rent', 'company', 'url');
        //   return view('adminpanel.rent.generate-pdf');
        $pdf = PDF::loadView('adminpanel.rent.generate-pdf', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }

    public function invoice($id){
        $rent = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.id',$id)->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->first();

        $company = Company::find(1);

        $data = compact('rent', 'company');
        return view('adminpanel.rent.invoice')->with($data);
    }


    // public function arrayPaginator($array, $request)
    // {
    //     $page = Input::get('page', 1);
    //     $perPage = 1;
    //     $offset = ($page * $perPage) - $perPage;

    //     return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
    //         ['path' => $request->url(), 'query' => $request->query()]);
    // }
}
