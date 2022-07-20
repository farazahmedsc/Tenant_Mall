@extends('layout.main')

@push('title')
Invoice 
@endpush

@push('js-link')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
    var doc = new jsPDF();

function saveDiv(divId, title) {
doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
doc.save('div.pdf');
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
                    <h4 class="page-title">Invoice</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-7 mx-auto">
                <!--begin::Invoice 2 main-->
                <div class="card ">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Layout-->
                        <div class="d-block" id="invoice">
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid mb-10 mb-xl-0">
                                <!--begin::Invoice 2 content-->
                                <div class="mt-n1">
                                    <!--begin::Top-->
                                    <div class="d-flex flex-stack pb-10">
                                        <!--begin::Logo-->
                                        <a href="#" class="mb-1">
                                        {{-- <img src="{{url('/')}}/uploads/tenant/{{$rent->photo}}" height="50" alt="image"> --}}
                                        <img src="{{url('/')}}/adminpanel/images/mmlogo.jpg" height="80" alt="image">
                                        </a>
                                        <!--end::Logo-->
                                        <!--begin::Action-->
                                        <div class="ms-auto">
                                        <a href="{{route("generate_pdf",['id'=>$rent->r_id])}}" class="btn btn-sm btn-primary">Download as pdf</a>
                                        <a href="{{route("send_invoice",['id'=>$rent->r_id])}}" class="btn btn-sm btn-success">Send</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div class="fw-bolder fs-3 text-gray-800 my-2">Invoice INV-{{$rent->invoice_no}}</div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bolder fs-6 text-gray-800">{{date('d F Y', strtotime($rent->generation_date))}}</div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            {{-- <div class="col-sm-6">                                                
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Due Date:</div>                                                
                                                <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                    <span class="pe-2">22 Dec 2021</span>
                                                    <span class="fs-7 text-danger d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-danger me-2"></span>Due in 10 days</span>
                                                </div>                                                
                                            </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                            <div class="fw-bolder fs-6 text-gray-800">{{$rent->first_name}} {{$rent->last_name}}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                            <div class="fw-bold fs-7 text-gray-600">{{$rent->a_name}}</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issued By:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bolder fs-6 text-gray-800">{{$company->name}}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-bold fs-7 text-gray-600">{{$company->street}} {{$company->apt}} 
                                                <br>{{$company->city}} {{$company->state}} {{$company->zip}} </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Content-->
                                        <div class="flex-grow-1">
                                            <!--begin::Table-->
                                            <div class="table-responsive mb-2">
                                                <table class="table mb-3">
                                                    <thead>
                                                        <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                            <th class="min-w-175px pb-2">Description</th>
                                                            <th class="min-w-100px text-end pb-2">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center pt-6">
                                                            <i class="fa fa-genderless text-danger fs-2 me-2"></i>Monthly Rent <span class="text-primary ms-1"> {{date('F', strtotime($rent->generation_date))}}</span></td>
                                                            <td class="pt-6 text-dark fw-boldest">${{$rent->rent}}</td>
                                                        </tr>
                                                        <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center">
                                                            <i class="fa fa-genderless text-success fs-2 me-2"></i>Monthly Maintenece</td>
                                                            
                                                            <td class="fs-5 text-dark fw-boldest">${{$rent->maintenance}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                            <!--begin::Container-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Section-->
                                                <div class="mw-300px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-bold pe-10 text-end text-gray-600 font-16" style="min-width:100px;">Subtotal :</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bolder text-dark ms-1 me-2">${{$rent->total_amount}}</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    
                                                    
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Code-->
                                                        <div class="fw-bold pe-10 text-end text-gray-600 font-16" style="min-width:100px;">Total :</div>
                                                        <!--end::Code-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bolder text-dark ms-1 me-2">${{$rent->total_amount}}</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Invoice 2 content-->
                            </div>
                            <!--end::Content-->
                            
                        </div>
                        <!--end::Layout-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Invoice 2 main-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection