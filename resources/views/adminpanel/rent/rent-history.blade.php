@extends('layout.main')

@push('title')
Rent History
@endpush

@push('css-link')
    <!-- Plugins css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('js-link')
<script>
    function payInvoice(area_name, tenant_id, tenant_name, amount, months, id, notes){

        $("select[name=month]").html('<option value="">Select Month</option>');
        $("#shopNumber").html(area_name);
        $("input[name=t_id]").val(tenant_id);
        $("input[name=clientName]").val(tenant_name);
        $("input[name=total_amount]").val('');
        $("input[name=pay_amount]").val('');
        $("textarea[name=description]").val('');
       
        // console.log(amount)
        // console.log(months)
        var month_name = ['January' , 'February' , 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November','December'];
        var today_month = new Date();
        today_month = today_month.getMonth();
        temp = today_month;
        for(i=0; i<6;i++){
            
            if(i!=0) {
                if(temp == 1){
                    temp=11;
                }else{
                    temp--;
                }
            }
            // months[i] == '' || 
            if(months[i].indexOf('Not Paid') != -1 || months[i].indexOf('warning') != -1){
                $("select[name=month]").append('<option value="'+(temp+1)+'" data-amount="'+amount[i]+'"  data-notes="'+notes[i]+'" data-id="'+id[i]+'">'+month_name[temp]+'</option>')
                
            }
        }
      
        
        $("#centermodal").modal('show');
    }

    function onchangeMonth(){
        amount = $("select[name=month]").find(':selected').data('amount');
        id = $("select[name=month]").find(':selected').data('id');
        notes = $("select[name=month]").find(':selected').data('notes');
        $("input[name=total_amount]").val(amount);
        $("input[name=pay_amount]").val(amount);
        $("input[name=rent_id]").val(id);
        $("textarea[name=description]").val(notes);

    }
    function markNewRent(){
        $("#markNewRent_modal").modal('show');
    }
    function tenantId(e){
  
        var area = $("select[name=tenant_id]").find(':selected').data('area');
        var rent = $("select[name=tenant_id]").find(':selected').data('rent');
        var maintenance = $("select[name=tenant_id]").find(':selected').data('maintenance');
        var acquiringdate = $("select[name=tenant_id]").find(':selected').data('acquiringdate');
    
        $("input[name=r_area_alloted]").val(area);
        $("input[name=r_rent]").val(rent);
        $("input[name=r_maintenance]").val(maintenance);
        $("input[name=r_acquiring_date]").val(acquiringdate);
    }
</script>
@endpush


@section('main-section')

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-qw">
                <div class="page-title-box">
                    <div class="page-title-right">
                        
                    </div>
                    <h4 class="page-title">Rent History</h4>
                </div>
            </div>
            
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between mb-2">
                            <div class="col-auto">
                                <form class="search-bar position-relative mb-sm-0 mb-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                </form>                          
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end">
                                    <a href="javascript:;" onclick="markNewRent()"
                                        class="btn btn-primary waves-effect waves-light mb-2 me-2"><i
                                            class="mdi mdi-basket me-1"></i>Mark New Rent</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                       
                                        <th>Shop#</th>
                                        <th>Name</th>
                                        <th>{{date('M-Y', strtotime('-5 month'))}}</th>
                                        <th>{{date('M-Y'    , strtotime('-4 month'))}}</th>
                                        <th>{{date('M-Y', strtotime('-3 month'))}}</th>
                                        <th>{{date('M-Y', strtotime('-2 month'))}}</th>
                                        <th>{{date('M-Y', strtotime('-1 month'))}}</th>
                                        <th>{{date('M-Y')}}</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- str_replace('0','',date('m')) --}}
                                    
                                    @for($i=0; $i<count($rents); $i++)
                                        <tr>
                                            
                                            <td>{{$rents[$i]->a_name}}</td>
                                        <td>    {{$rents[$i]->first_name}} {{$rents[$i]->last_name}}</td>
                   
                                            @php
                                                $month6 = $month5 = $month4 = $month3 = $month2 = $month1='';
                                                $total6 = $total5 = $total4 = $total3 = $total2 = $total1='';
                                                $notes6 = $notes5 = $notes4 = $notes3 = $notes2 = $notes1='';
                                                $id6 = $id5 = $id4 = $id3 = $id2 = $id1='';
                                                $temp=0;$test = 'false';
                                                for($j=0; $j<6; $j++){
                                                    if($j!=0){
                                                       
                                                        $test = 'false';
                                                        $temp = $i+1;
                                                        if($temp < count($rents)){
                                                            $test = 'true';
                                                            if($rents[$i]->t_id == $rents[$temp]->t_id){
                                                                $i++;
                                                            }else{
                                                                break;
                                                            }
                                                        }
                                                        
                                                    }

                                                   
                                                    if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-5 month')))){
                                                        $id6 = $rents[$i]->r_id;
                                                        $total6 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes6 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month6 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-4 month')))){
                                                        $id5 = $rents[$i]->r_id;
                                                        $total5 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes5 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month5 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-3 month')))){
                                                        $id4= $rents[$i]->r_id;
                                                        $total4 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes4 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month4 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-2 month')))){
                                                        $id3 = $rents[$i]->r_id;
                                                        $total3 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes3 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month3 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-1 month')))){
                                                        $id2 = $rents[$i]->r_id;
                                                        $total2 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes2 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month2 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m'))){
                                                        $id1 = $rents[$i]->r_id;
                                                        $total1 = $rents[$i]->total_amount - $rents[$i]->pay_amount;
                                                        $st = $rents[$i]->status;
                                                        $notes1 = $rents[$i]->description;
                                                        $st = ($st == 'paid' )? 'success' : 'warning';
                                                        $month1 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-'. $st .' mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }

                                                }
                                                
                                            @endphp
                                            
                                            <td>{!! $month6 !!}</td>
                                            <td>{!! $month5 !!}</td>
                                            <td>{!! $month4 !!}</td>
                                            <td>{!! $month3 !!}</td>
                                            <td>{!! $month2 !!}</td>
                                            <td>{!! $month1 !!}</td>
                                            <td>
                                               

                                            <button type="button" class="btn btn-primary btn-sm" onclick="payInvoice('{{$rents[$i]->a_name}}','{{$rents[$i]->t_id}}','{{$rents[$i]->first_name}} {{$rents[$i]->last_name}}' ,['{{$total1}}', '{{$total2}}', '{{$total3}}' , '{{$total4}}', '{{$total5}}', '{{$total6}}'],['{{$month1}}', '{{$month2}}', '{{$month3}}' , '{{$month4}}', '{{$month5}}', '{{$month6}}'],['{{$id1}}', '{{$id2}}', '{{$id3}}' , '{{$id4}}', '{{$id5}}', '{{$id6}}'],['{{$notes1}}', '{{$notes2}}', '{{$notes3}}' , '{{$notes4}}', '{{$notes5}}', '{{$notes6}}'])" >Pay Rent</button>

                                                {{-- <a href="{{route('area_delete', ['id' => $area->id ])}}" class="action-icon delete-confirm"> <i class="mdi mdi-delete text-danger"></i></a> --}}
                                            </td>

                                           
                                        </tr>
                                    @endfor

                                   
                                    
                                    
                                </tbody>
                            </table>

                            {{-- <div class="row">
                                {{ $rents->links('vendor.pagination.custom') }}
                            </div> --}}
                        </div>

                       
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->


    <div class="modal fade" id="centermodal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="{{url('/pay_rent')}}" method="POST" id="kt_modal_add_customer_form" data-kt-redirect="apps/customers/list.html">
                   @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Invoice for Area/Shop <span id="shopNumber"></span></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                        <label class="required fs-6 fw-bold">Client Name</label>
                          <input type="text" class="form-control form-control-solid" name="clientName" readonly />
                          <input type="hidden" name="rent_id">
                        {{-- <h4 id="clientName"></h4> --}}
                        {{-- <select name="client_id" class="form-control form-select form-select-solid" required>
                            <option value="">Select Client</option>
                                                                                <option value="1">Jhon</option>
                                                                                <option value="2">Sara</option>
                                                                                <option value="3">Alex</option>
                                                                                <option value="4">Sabrina</option>
                                                                            </select> --}}
                    </div>
                    
                    <div class="fv-row mb-3">
                        <label class="required fs-6 fw-bold">Month</label>
                        {{-- form-select form-select-solid --}}
                        <select name="month" class="form-control" onchange="onchangeMonth()">
                            <option value="">Select Month</option>
                            
                        </select>
                        {{-- <input type="date" class="form-control form-control-solid" name="name" value="2021-12-12" disabled readonly/> --}}
                    </div>
                    
                    
                            <div class="fv-row mb-3">
                                    <label class="required fs-6 fw-bold">Amount to pay</label>
                                    <input type="text" class="form-control form-control-solid" name="total_amount"  readonly />
                            </div>

                            <div class="fv-row mb-3 ">
                                <label class="required fs-6 fw-bold">Amount Paid</label>
                                <input type="text" class="form-control form-control-solid" name="pay_amount"   />
                            </div>

                            <div class="fv-row mb-3 ">
                                <label class="required fs-6 fw-bold">Notes</label>
                                <textarea name="description"  class="form-control" rows="3"></textarea>
                            </div>


                            
                            
                     
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                            <span class="indicator-label">Pay</span>
                            
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>


    <div class="modal fade" id="markNewRent_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="{{url('/store_new_rent')}}" method="POST" id="kt_modal_add_customer_form" >
                   @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Mark New Rent </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                        <label class="required fs-6 fw-bold">Client Name</label>                       
                    
                         <select name="tenant_id" class="form-control form-select form-select-solid" required onchange="tenantId(this.value)">
                            <option value="">Select Client</option>
                            @foreach ($tenants as $tenant)
                                <option value="{{$tenant->id}}" data-area="{{$tenant->area_alloted}}" data-rent="{{$tenant->rent}}" data-maintenance="{{$tenant->maintenance}}" data-acquiringdate="{{$tenant->acquiring_date}}"  >{{$tenant->first_name}} {{$tenant->last_name}}</option>
                                
                            @endforeach
                            
                        </select>
                    </div>
                    
                    <div class="fv-row mb-3">
                        <label class="required fs-6 fw-bold">Month</label>
                        {{-- form-select form-select-solid --}}
                        <select name="r_month" class="form-control" onchange="onchangeMonth()" required>
                            <option value="">Select Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        {{-- <input type="date" class="form-control form-control-solid" name="name" value="2021-12-12" disabled readonly/> --}}
                    </div>
                    

                    <div class="fv-row mb-3 ">
                        <label class="required fs-6 fw-bold">Notes</label>
                        <textarea name="r_description"  class="form-control" rows="3"></textarea>
                    </div>
                    <div class="d-none">
                        <input type="text" name="r_area_alloted" >
                        <input type="text" name="r_rent" >
                        <input type="text" name="r_maintenance" >
                        <input type="text" name="r_acquiring_date" >
                    </div>
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>

    
@endsection