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
    function payInvoice(area_name, tenant_id, tenant_name, amount, months, id){

        $("select[name=month]").html('<option value="">Select Month</option>');
        $("#shopNumber").html(area_name);
        $("input[name=t_id]").val(tenant_id);
        $("input[name=clientName]").val(tenant_name);
       
        console.log(amount)
        console.log(months)
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
            if(months[i].indexOf('Not Paid') != -1){
                $("select[name=month]").append('<option value="'+(temp+1)+'" data-amount="'+amount[i]+'" data-id="'+id[i]+'">'+month_name[temp]+'</option>')
            }
        }
      
        
        $("#centermodal").modal('show');
    }

    function onchangeMonth(){
        amount = $("select[name=month]").find(':selected').data('amount');
        id = $("select[name=month]").find(':selected').data('id');
        $("input[name=total_amount]").val(amount);
        $("input[name=pay_amount]").val(amount);
        $("input[name=rent_id]").val(id);

    }
</script>
@endpush


@section('main-section')

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
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
                                    <button type="button" class="btn btn-primary waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#centermodal">Generate Invoice</button>
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
                                                        $total6 = $rents[$i]->total_amount;
                                                        $month6 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-4 month')))){
                                                        $id5 = $rents[$i]->r_id;
                                                        $total5 = $rents[$i]->total_amount;
                                                        $month5 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-3 month')))){
                                                        $id4= $rents[$i]->r_id;
                                                        $total4 = $rents[$i]->total_amount;
                                                        $month4 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-2 month')))){
                                                        $id3 = $rents[$i]->r_id;
                                                        $total3 = $rents[$i]->total_amount;
                                                        $month3 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m', strtotime('-1 month')))){
                                                        $id2 = $rents[$i]->r_id;
                                                        $total2 = $rents[$i]->total_amount;
                                                        $month2 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
                                                    }else if($rents[$i]->start_month == str_replace('0','', date('m'))){
                                                        $id1 = $rents[$i]->r_id;
                                                        $total1 = $rents[$i]->total_amount;
                                                        $month1 = ($rents[$i]->status != 'unpaid') ? '<div class="badge bg-success mb-1 text-white text-center">$'.$rents[$i]->pay_amount.'</div>' :  '<div class="badge bg-danger mb-1 text-white text-center">Not Paid</div>';
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
                                               

                                            <button type="button" class="btn btn-primary btn-sm" onclick="payInvoice('{{$rents[$i]->a_name}}','{{$rents[$i]->t_id}}','{{$rents[$i]->first_name}} {{$rents[$i]->last_name}}' ,['{{$total1}}', '{{$total2}}', '{{$total3}}' , '{{$total4}}', '{{$total5}}', '{{$total6}}'],['{{$month1}}', '{{$month2}}', '{{$month3}}' , '{{$month4}}', '{{$month5}}', '{{$month6}}'],['{{$id1}}', '{{$id2}}', '{{$id3}}' , '{{$id4}}', '{{$id5}}', '{{$id6}}'])" >Pay Rent</button>

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

                            <div class="fv-row mb-3">
                                <label class="required fs-6 fw-bold">Amount Paid</label>
                                <input type="hidden" class="form-control form-control-solid" name="pay_amount"   />
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

    
@endsection