@extends('layout.main')
@push('title')
Add User
@endpush

@push('css-link')
<!-- Plugins css -->
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('js-link')
<!-- plugin js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- Init js-->
<script src="assets/js/pages/create-project.init.js"></script>
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
                <h4 class="page-title">Add Users</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h5 class="form-section mb-3 font-24">Add User</h5>

                    <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>First Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="first_name" class="form-control form-control-solid" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Last Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="last_name" class="form-control form-control-solid" required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                                <label>Phone/Mobile <sup class="text-danger">*</sup></label>
                                <input type="text" name="phone" class="form-control form-control-solid" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>User Name</label>
                                <input type="text" name="zip" class="form-control form-control-solid" >
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Email <sup class="text-danger">*</sup></label>
                                <input type="email" name="email" class="form-control form-control-solid" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Password <sup class="text-danger">*</sup></label>
                                    <input type="text" name="password" id="drvrPass" class="form-control form-control-solid" aria-describedby="basic-addon2" minlength="6" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>User Type <sup class="text-danger">*</sup></label>
                                <select name="payment_type" class="form-control form-select form-select-solid" onchange="showPaymentFields(this);" required>
                                    <option value="">Select your user type...</option>
                    <option value="1">Admin</option>
                    <option value="2">Case Manager</option>
                                </select>
                            </div>
                        </div>


                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Create</button>
                            <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                        </div>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    
</div> <!-- container -->



@endsection