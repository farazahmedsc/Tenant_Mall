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
                    <h4 class="page-title">Add Expense</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    
                    <h5 class="form-section mb-3 font-24">Add Expense</h5>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Cateogry <sup class="text-danger">*</sup></label>
                                <select name="e_id" class="form-control form-select form-select-solid" required>
                                    <option value="">Select</option>
                                    <option value="Shop">Food</option>
                                    <option value="Office">Payroll</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label>Amount <sup class="text-danger">*</sup></label>
                                <input type="number" name="amount" class="form-control form-control-solid" required>
                            </div>
                                
                        </div>
                            
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label>Expense Date <sup class="text-danger">*</sup></label>
                                    <input type="date" name="street" class="form-control form-control-solid" required>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label>Description</label>
                                    <input type="text" name="amount" class="form-control form-control-solid">
                                </div>
                                
                                
                            </div>


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Create</button>
                                <button type="reset" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

@endsection