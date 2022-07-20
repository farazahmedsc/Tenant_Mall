@extends('layout.main') 

@push('title')
  Expense 
@endpush

@push('css-link')
 <!-- Plugins css -->
 <link href="{{ url('/') }}/adminpanel/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
 <link href="{{ url('/') }}/adminpanel/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
 <link href="{{ url('/') }}/adminpanel/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('js-link')
     <!-- plugin js -->
     <script src="{{ url('/') }}/adminpanel/libs/dropzone/min/dropzone.min.js"></script>
     <script src="{{ url('/') }}/adminpanel/libs/select2/js/select2.min.js"></script>
     <script src="{{ url('/') }}/adminpanel/libs/flatpickr/flatpickr.min.js"></script>

     <!-- Init js-->
     <script src="{{ url('/') }}/adminpanel/js/pages/create-project.init.js"></script>
     <script>
         function addExpense(){
            $("#centermodal").modal('show');
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
                        <ol class="breadcrumb m-0">
                            
                        </ol>
                    </div>
                    <h4 class="page-title">{{$label}}</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    
                    <h5 class="form-section mb-3 font-24">{{$label}}</h5>
                    <form action="{{$url}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                
                                <label>Category <sup class="text-danger">*</sup></label>
                               
                                <select name="ec_id" class="form-control form-select form-select-solid" required>
                                    <option value="">Select</option>
                                    @foreach ($ec as $e)
                                        <option value="{{$e->id}}" {{($expense->ec_id == $e->id)? 'Selected' : '';}}>{{$e->name}}</option>
                                    @endforeach
                                </select>
                                <button type="button" onclick="addExpense()" class="btn btn-primary mt-1" style="float: right">+</button>
                               
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label>Amount <sup class="text-danger">*</sup></label>
                                <input type="number" name="amount" value="{{$expense->amount}}" class="form-control form-control-solid" required>
                            </div>
                                
                        </div>

                 
                            
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Expense Date <sup class="text-danger">*</sup></label>
                                    <input type="date" name="expense_date" class="form-control form-control-solid" value="{{$expense->expense_date}}" required>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control form-control-solid" value="{{$expense->description}}">
                                </div>                                
                            </div>

                            <div class="row {{(!is_null($expense->is_active)) ? '' : 'd-none';}}">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Status</label>
                                    <select name="is_active" class="form-control form-select form-select-solid" >                                        
                                        <option value="1" {{($expense->is_active == 1)? 'Selected' : '';}}>Active</option>
                                        <option value="0" {{($expense->is_active == 0)? 'Selected' : '';}}>Inactive</option>
                                    </select>                                   
                                </div>
                            </div>


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Submit</button>
                                <button type="reset" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                            </div>
                        </div>
                    </form> 

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->


    
    <div class="modal fade" id="centermodal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="{{url('/expense_category_store_from_expense')}}" method="POST" id="kt_modal_add_customer_form" data-kt-redirect="apps/customers/list.html">
                   @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Expense Category </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                        <label class="required fs-6 fw-bold">Expense Category</label>
                          <input type="text"  name="name" class="form-control form-control-solid"  />
                         
                      
                    </div>
                            
                     
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" class="btn btn-white me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Add Category</span>
                            
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