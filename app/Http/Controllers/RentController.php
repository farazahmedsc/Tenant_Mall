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

        $tenants = Tenants::where('is_active', '1')->get();

        // $rents = DB::table('rent')   
        // ->selectRaw('SELECT tenants.*, area.*, rent.*, area.id as a_id, area.name as a_name, rent.rent as r_rent, rent.maintenance as r_maintenance, rent.status as r_status, MONTH(rent.generation_date) as start_month from rent inner join area on rent.a_id=area.id inner join tenants on rent.t_id=tenants.id')
        // ->whereRaw('rent.created_at >='.date('Y-m', strtotime('-5 month')))
        // // ->orderByRaw(' tenants.id,rent.created_at')
        // ->paginate(1);

        // echo "<pre>"; print_r($tenants); die;
        // $rents = $this->arrayPaginator($rents, $request);
        $data = compact('rents','tenants');
        return view('adminpanel.rent.rent-history')->with($data);
    }

    public function pay_rent(Request $request){
        $rent = Rent::find($request->rent_id);
        $rentpayamount = ($rent->pay_amount == null)? 0 : $rent->pay_amount; 
        
        $rent->pay_amount =  $rentpayamount + $request->pay_amount;
        $rent->pay_date = date('Y-m-d');
        
        if($request->pay_amount < ($rent->total_amount - $rentpayamount) ){
            $rent->status = 'partially_paid';
        }else{
            $rent->status = 'paid';
        }
        $rent->description = $request->description;
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
        // $url = env('APP_URL') . '/uploads/tenant/' . $rent->photo;
        // $url = url('/'). '/adminpanel/images/mmlogo.jpg';
        $url = env('APP_URL') . '/adminpanel/images/mmlogo.jpg';

        //$url = 'images/V.png';url('/') . 'http://localhost/Tenant_Mall/public'
        $type = pathinfo($url, PATHINFO_EXTENSION);
        $data = file_get_contents($url);
        $url = 'data:image/' . $type . ';base64,' . base64_encode($data);


        $data = compact('rent', 'company', 'url');
        //   return view('adminpanel.rent.generate-pdf');
        $pdf = PDF::loadView('adminpanel.rent.generate-pdf', $data);
    
        return $pdf->download('INV_' .$rent->invoice_no . '.pdf');
    }
    public function send_invoice($id){
        $rent = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.id',$id)->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->first();
        $company = Company::find(1);

        // $url = env('APP_URL') . '/adminpanel/images/mmlogo.jpg';
        // $type = pathinfo($url, PATHINFO_EXTENSION);
        // $data = file_get_contents($url);
        // $url = 'data:image/' . $type . ';base64,' . base64_encode($data);
       

        $details = [
            'invoice_no' => $rent->invoice_no,
            'name' => $rent->first_name . ' ' . $rent->last_name,
            'area' => $rent->a_name,
            'company_name' => $company->name,
            'company_street' => $company->street,
            'company_apt' => $company->apt,
            'company_city' => $company->city,
            'company_zip' => $company->zip,
            'company_phone_number' => $company->phone_number,
            'company_email' => $company->email,
            'generation_month' => date('F', strtotime($rent->generation_date)),
            'rent' => $rent->rent,
            'maintenance' => $rent->maintenance,
            'total_amount' => $rent->total_amount
        ];
       
        \Mail::to($rent->email)->send(new \App\Mail\SendInvoice($details));

        Alert::success('Congrats', 'Invoice is Successfully Send');
        return redirect('invoice/'.$id);

     

    }

    public function invoice($id){
        $rent = Rent::select('tenants.*', 'area.*', 'rent.*', 'area.id as a_id', 'area.name as a_name', 'rent.rent as r_rent', 'rent.maintenance as r_maintenance', 'rent.status as r_status','rent.id as r_id')->join('area', 'rent.a_id', '=', 'area.id')->join('tenants', 'rent.t_id', '=', 'tenants.id')->where('rent.id',$id)->orderBy('rent.status', 'desc')->orderBy('tenants.id', 'asc')->orderBy('rent.id', 'desc')->first();

        $company = Company::find(1);

        $data = compact('rent', 'company');
        return view('adminpanel.rent.invoice')->with($data);
    }

    public function store_new_rent(Request $request){
        
        $strtotime = strtotime($request['r_acquiring_date']);
        $day = date('d', $strtotime);
        $year = date('Y', $strtotime);
        $acquiring_date = $day .'-'. $request['r_month'] .'-'. $year;          
        
        $acquiring_date = date('Y-m-d', strtotime($acquiring_date));

        $last_rent = Rent::orderBy('created_at', 'desc')->first();
        
        $rent = new Rent();
        $rent->t_id = $request['tenant_id'];//['t_id'];
        $rent->a_id = $request['r_area_alloted'];//['a_id'];
        $rent->rent = $request['r_rent'];
        $rent->maintenance = $request['r_maintenance'];
        $rent->total_amount = $request['r_rent'] + $request['r_maintenance'];
        $rent->generation_date = $acquiring_date ;//date('Y-m-d');
        $rent->next_generation_date = date('Y-m-d', strtotime('+1 month', strtotime($acquiring_date)));
        $rent->generated = '0';
        $rent->status = 'unpaid';
        $rent->description = $request['r_description'];
        $result = $rent->save();

        if($result){
            Alert::success('Congrats', 'New Rent is Successfully Marked');
            return redirect('rent_history');
        }else{
            Alert::error('Error', 'New Rent Failed to Marked');
            return redirect('rent_history');
        }
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
