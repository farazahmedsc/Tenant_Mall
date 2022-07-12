@extends('layout.main')
@push('title')
My Account
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
                <h4 class="page-title">My Account</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h5 class="form-section mb-3 font-24">My Account</h5>
                <form action="{{url('/my_account_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>First Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="first_name" class="form-control form-control-solid" value="{{session('user')['first_name']}}" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Last Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="last_name" class="form-control form-control-solid" value="{{session('user')['last_name']}}"  required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                                <label>Phone/Mobile <sup class="text-danger">*</sup></label>
                                <input type="text" name="phone_number" class="form-control form-control-solid" value="{{session('user')['phone_number']}}"  required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control form-control-solid"  value="{{session('user')['username']}}" >
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Email <sup class="text-danger">*</sup></label>
                                <input type="email" name="email" class="form-control form-control-solid" value="{{session('user')['email']}}" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Password <sup class="text-danger">*</sup></label>
                                    <input type="text" name="password" id="drvrPass" class="form-control form-control-solid"  value="{{session('user')['password']}}" aria-describedby="basic-addon2"  required>
                                    {{-- minlength="6" --}}
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label">Photo of User</label>
                                <input type="file" name="photo" class="form-control">                                 
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



@endsection